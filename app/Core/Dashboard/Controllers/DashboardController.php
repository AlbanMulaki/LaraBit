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
    public function settings() {


        $settings = Settings::get(['id', 'code', 'value', 'tab_name', 'lang', 'type']);
        $options = $settings->groupBy('tab_name');
        return view('dashboard::settings', ['options' => $options]);
    }

    /**
     * Update settings
     */
    public function updateSettings(SettingsUpdateValidator $request) {
//        Settings::
        return app('\App\Core\Images\Controllers\ImagesController')->saveImage($request->file('logo'));
        
        $updateSettings = $request->except(['_token']);
        return $updateSettings['logo']->getClientOriginalName();
        Settings::updateSettings($request->except(['_token']));
        return $request->file('logo');

        $message['message'][] = trans('dashboard::validation.success_update');
        $message['code'] = 200;
        $message['status'] = 'success';
        $message['action'] = 'update';
        return redirect()->back()->with($message);
        
        return app('\App\Core\Images\Controllers\ImagesController')->saveImage($request->file('logo'));
        return request()->file('logo');
//        return $request->file('logo');
//    }
//    public function updateSettings(){
        return request()->file('logo');
    }

}
