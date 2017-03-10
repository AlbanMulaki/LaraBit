<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
//        $this->mergeConfigFrom(__DIR__ . 'config/core.php', 'core');
        $coreModules = config('core.modules');

        foreach ($coreModules as $index => $module) {
            if ($module === true) {
                $routesDir = base_path('app/core/' . $index . '/routes.php');
                $this->loadRoutesFrom($routesDir);
            }
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
