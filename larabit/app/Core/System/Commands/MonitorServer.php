<?php

namespace App\Core\System\Commands;

use Illuminate\Console\Command;
use App\Servers;
use App\ServersHealthTask;
use App\ServersMonitor;
use App\Core\Common\Helper\Enum;

class MonitorServer extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monitor:server';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check servers status';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $healthTasks = ServersHealthTask::getAllHealthTask();
        $servers = Servers::getAllServer();
        foreach ($healthTasks as $task) {
            foreach ($servers as $server) {
                if ($task->protocol == "http" || $task->protocol == "https") {
                    $result = $this->checkHttp($server, $task->timeout, $task->port, $task->protocol);
                } else {
                    $result = $this->checkPing($server, $task->timeout);
                }
                ServersMonitor::create(array('status' => $result['status'],
                    "latency" => $result['latency'],
                    "server_id" => $server->id,
                    'tasks_id' => $task->id));
            }
        }
    }

    private function checkPing($server, $timeout) {
        $targetHost = (strlen($server->ip_address) > 5 ? $server->ip_address : $server->hostname);
        exec("ping -c 3 -w " . $timeout . " " . $targetHost . " | grep -e \"avg\"", $output, $status);
        if ($status == 0) {
            $status = Enum::SUCCESS;
        } else {
            $status = Enum::FAILED;
        }
        try {
            $pingReport = explode("=", $output[0]);
            $latencyKey = explode("/", $pingReport[0]);
            $latencyValue = explode("/", $pingReport[1]);
            $latency = $latencyValue[1];
        } catch (Exception $e) {
            return array("status" => $status,
                "latency" => "");
        }
        return array("status" => $status,
            "latency" => (int) $latency);
    }

    private function checkLatency($server) {
        $targetHost = (strlen($server->ip_address) > 5 ? $server->ip_address : $server->hostname);
        exec("ping -c 3 -w 3 " . $targetHost . " | grep -e \"avg\"", $output, $status);

        try {
            $pingReport = explode("=", $output[0]);
            $latencyKey = explode("/", $pingReport[0]);
            $latencyValue = explode("/", $pingReport[1]);
            $latency = $latencyValue[1];
        } catch (Exception $e) {
            return "";
        }

        return (int) $latency;
    }

    private function checkHttp($server, $timeout = 100, $port = 80, $protocol = "http") {
        $hostname = (strlen($server->ip_address) > 5 ? $server->ip_address : $server->hostname);
        if (strlen($protocol) > 2) {
            $hostname = $protocol . "://" . $hostname;
        }
        $testServer = curl_init($hostname);
        curl_setopt($testServer, CURLOPT_PORT, $port);
        curl_setopt($testServer, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($testServer, CURLOPT_TIMEOUT, $timeout);
        curl_exec($testServer);
        $result = curl_getinfo($testServer);
        print_r($result);
        if (preg_match("/(2|3)[0-9][0-9]/", $result['http_code'])) {

            return array('status' => Enum::SUCCESS,
                'latency' => $this->checkLatency($server));
        }
        return array('status' => Enum::FAILED, 'latency' => '');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        //
    }

}
