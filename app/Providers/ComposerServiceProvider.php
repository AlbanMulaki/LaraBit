<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use JsLocalization\Facades\JsLocalizationHelper;
use Illuminate\Support\Facades\Event;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        View::composer(
                'users::login', 'App\Http\ViewComposers\ProfileComposer'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
//        Event::listen('JsLocalization.registerMessages', function() {
//            JsLocalizationHelper::addMessagesToExport([
//                'login' => [
//                    'login_form' => [
//                        'Login Form'
//                    ]
//                ]
//            ]);
//        });
//        Event::listen('JsLocalization.registerMessages', function() {
//            JsLocalizationHelper::addMessagesToExport([
//                    // list the keys of the messages here, similar
//                    // to the 'messages' array in the config file
//            ]);
//        });
    }

}
