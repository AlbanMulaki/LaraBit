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
        $this->setPageName(trans('dashboard::general.settings'));
        $settings = Settings::get(['id', 'code', 'value', 'tab_name', 'lang', 'type']);
        $options = $settings->groupBy('tab_name');
        return view('dashboard::settings', ['options' => $options]);
    }

    /**
     * Update settings
     */
    public function updateSettings(SettingsUpdateValidator $request) {
        $updateSettings = $request->except(['_token', 'logo']);
        if (!is_null($request->file('logo'))) {
            $updateSettings['logo'] = app('\App\Core\Images\Controllers\ImagesController')->uploadImage("", $request->file('logo'));
            if (strlen($updateSettings['logo']) < 3) {
                unset($updateSettings['logo']);
            }
        }
        Settings::updateSettings($updateSettings);
        $message['message'][] = trans('dashboard::validation.success_update');
        $message['code'] = 200;
        $message['status'] = 'success';
        $message['action'] = 'update';
        return redirect()->back()->with($message);
    }

}
