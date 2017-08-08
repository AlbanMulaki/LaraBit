<?php

namespace Larabit\PostArticle;

use Illuminate\Support\ServiceProvider;

class PostArticleServiceProvider extends ServiceProvider {

    private static $MODULE_NAME = "postarticle";

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/views', static::$MODULE_NAME);
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/lang', static::$MODULE_NAME);
        $this->publishes([
            __DIR__ . '/config.php' => config_path(static::$MODULE_NAME . '.php'),
        ]);
        $this->publishes([
            __DIR__ . '/assets' => public_path('vendor/courier'),
                ], static::$MODULE_NAME);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $this->mergeConfigFrom(
                __DIR__ . '/config.php', static::$MODULE_NAME
        );
//        $this->app['Modules'] = $this->app->share(function($app) {
//            return new Modules;
//        });
    //
    }

}
