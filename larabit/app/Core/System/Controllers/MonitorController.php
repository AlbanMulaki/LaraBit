<?php

namespace App\Core\System\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
//use Auth;
use App\ServersMonitor;

//use App\Core\System\Helper\CPANEL;

class MonitorController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->setPageName(trans('system::general.system_title'));
    }

    public function status() {
//        $serversStatus = \App\ServersMonitor::getOverallStatus();
          $servers = \App\Servers::all();
//          
//          $health = $servers[0]->healths();
//          return ($health[0]->getHealthCheckStatus());
////        debug($serversStatus);
        return view('system::monitor',['servers'=>$servers]);
    }

}
