<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class CoreServiceProvider extends ServiceProvider {

  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot() {
    $baseCore = config('core.core_path');
//        $this->mergeConfigFrom(__DIR__ . 'config/core.php', 'core');
    $coreModules = config('core.modules');

    foreach ($coreModules as $moduleName => $module) {
      if ($module === true) {
        //Load routes of module
        $routesFile = $baseCore . $moduleName . '/routes.php';
        $this->loadRoutesFrom($routesFile);

        //Load Views of module
        $viewsDir = $baseCore . $moduleName . "/Views";
        $this->loadViewsFrom($viewsDir, strtolower($moduleName));

        //Load languages
        $langDir = $baseCore . $moduleName . "/lang";
        $this->loadTranslationsFrom($langDir, strtolower($moduleName));

        //Load migration
        $migrationDir = $baseCore . $moduleName . "/Db/migration";
        $this->loadMigrationsFrom($migrationDir);

//        $seed = array(
//            $baseCore . $moduleName . "/db/seed/" => base_path('database/seeds')
//        );
//        $this->publishes($seed);

        $composerViewClassName = config('core.core_namespace') . ucfirst($moduleName) . "\Composers\ViewComposer";

        $composerView = new \App\Core\Users\Composers\ViewComposer();
        View::composer($composerView->views, $composerViewClassName);
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
