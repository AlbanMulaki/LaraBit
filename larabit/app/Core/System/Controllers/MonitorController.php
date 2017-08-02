<?php

namespace App\Core\System\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
//use Auth;
use App\Core\System\Validator\HealthServerValidator;
use App\ServersMonitor;
use App\ServersHealthPivot;
use App\ServersHealth;

//use App\Core\System\Helper\CPANEL;

class MonitorController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->setPageName(trans('system::general.system_title'));
    }

    public function status() {
//        $serversStatus = \App\ServersMonitor::getOverallStatus();
        $servers = \App\Servers::all();
        $healthList = \App\ServersHealth::all();
//          
//          $health = $servers[0]->healths();
//          return ($health[0]->getHealthCheckStatus());
////        debug($serversStatus);
        return view('system::monitor', ['servers' => $servers, 'healthList' => $healthList]);
    }

    /**
     * Add check health to server
     * @param HealthServerValidator $request
     * @return json
     */
    public function healthServer(HealthServerValidator $request) {
        try {
            $healthServer = ServersHealthPivot::create($request->all());
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                $message['message'][] = trans("system::validation.health_check_duplicate");
            } else {
                $message['message'][] = $e->errorInfo;
            }
            $message['code'] = 500;
            $message['status'] = 'error';
            $message['action'] = 'create';
            return response()->json($message, $message['code']);
        }
        $healthCheck = ServersHealth::find($request->get('health_id'));
        $message['message'][] = trans('system::validation.health_check_attached', ["healthcheck" => $healthCheck->name]);
        $message['code'] = 200;
        $message['status'] = 'success';
        $message['action'] = 'create';
        return response()->json($message, $message['code']);
    }

}
