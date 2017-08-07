<?php

namespace App\Core\System\Commands;

use Illuminate\Console\Command;
use App\Servers;
use App\ServersHealthTask;
use App\ServersHealthChecks;
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
    }
    
    public function handle(){
        $servers = Servers::all();
        foreach ($servers as $server) { //Check healths for each server
            foreach ($server->healths() as $healthService) {// Check each health
                $health = $healthService->getHealth;
                if ($health->protocol == "http" || $health->protocol == "https") {
                    $result = $this->checkHttp($server, $health->timeout, $health->port, $health->protocol);
                } else {
                    $result = $this->checkPing($server, $health->timeout);
                }

                ServersHealthChecks::create(array('status' => $result['status'],
                    "latency" => $result['latency'],
                    'shr_id' => $healthService->id));
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
        if (preg_match("/(2|3)[0-9][0-9]/", $result['http_code'])) {

            return array('status' => Enum::SUCCESS,
                'latency' => $this->checkLatency($server));
        }
        return array('status' => Enum::FAILED, 'latency' => '');
    }

}
