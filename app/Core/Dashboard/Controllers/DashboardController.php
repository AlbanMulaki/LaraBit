<?php

namespace App\Core\Dashboard\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Settings;
use App\Core\Dashboard\Validator\SettingsUpdateValidator;

class DashboardController extends Controller {

    /**
     * Dashboard page
     * @return redirect
     */
    public function dashboard() {
      return view("dashboard::dashboard");
    }
    
    
    /**
     * Settings page
     */
    public function settings(){
        $settings = Settings::get(['id', 'code','value','tab_name','lang','type']);
        $options = $settings->groupBy('tab_name');
        return view('dashboard::settings',['options'=>$options]);
    }
    
    /**
     * Update settings
     */
    public function updateSettings(SettingsUpdateValidator $request){
        return $request->all();
    }

}
