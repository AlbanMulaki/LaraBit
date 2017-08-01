<?php

namespace App\Core\System\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Auth;

//use App\Core\System\Helper\CPANEL;

class MonitorController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->setPageName(trans('system::general.system_title'));
    }

    public function status() {
        // Instantiate the CPANEL object.
//        include __DIR__."/../Helper/cPanel.php";
// Connect to cPanel - only do this once.
//        $server = new \Gufy\CpanelPhp\Cpanel([
//            'host' => 'https://server.mulakihost.com:2087', // required
//            'username' => 'root', // required
//            'auth_type' => 'hash', // optional, default 'hash'
//            'password' => '19YUM5P9IMKE4IZTHKBAX3DOVR1FLDJJ', // required
//        ]);
//        $user = \App\User::find(2);
//        $user->notify(new \App\Core\System\Notifications\MonitorServer,["title"=>""]);
// auth()->user()->notify(new \App\Notifications\GeneralNotifications(['subject'=>"Warning Disk Full",'description'=>"Disk is full","icon"=>"fa fa-server"]));
//      $role =   \App\Role::first();
//      $role->notify(new \App\Core\System\Notifications\MonitorServer);
// return "asdf";
//    return $user->unreadNotifications;
        
        return response()->json($server->listaccts());
        
    return auth()->user()->unreadNotifications;
        
        
        return response()->json($cpanel->listaccts());
// Get domain user data.

        return view('system::monitor');
    }

}
