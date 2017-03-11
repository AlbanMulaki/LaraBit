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
        $baseCore = base_path('app/core/');
//        $this->mergeConfigFrom(__DIR__ . 'config/core.php', 'core');
        $coreModules = config('core.modules');

        foreach ($coreModules as $moduleName => $module) {
            if ($module === true) {
                //Load routes of module
                $routesFile = $baseCore. $moduleName . '/routes.php';
                $this->loadRoutesFrom($routesFile);
                
                //Load Views of module
                $viewsDir = $baseCore.$moduleName."/views";
                $this->loadViewsFrom($viewsDir, $moduleName);
                
                //Load languages
                $langDir = $baseCore.$moduleName."/lang";
                $this->loadTranslationsFrom($langDir,$moduleName);
                
                //Load migration
                $migrationDir = $baseCore.$moduleName."/db/migration";
                $this->loadMigrationsFrom($migrationDir);
                
                $seed = array(
                    $baseCore.$moduleName."/db/seed/" => base_path('database/seeds')
                );
                
                $this->publishes($seed);
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
