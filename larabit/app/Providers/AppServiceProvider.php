<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Helper\ParserValidationHTML;
use Illuminate\Support\Facades\Blade;
use Laravel\Dusk\DuskServiceProvider;

class AppServiceProvider extends ServiceProvider {

    private $parserValidator;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        $this->parserValidator = new ParserValidationHTML();
        //Fix for migrate
        Schema::defaultStringLength(191);
        $this->validateDirective();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }
    }

    /**
     * Directive @validate for validating frontend and backend with same rule
     */
    private function validateDirective(){

        Blade::directive('validate', function($context) {
            $context = explode('@',$context);
            $formRequest = new $context[0]();
            return $this->parserValidator->parseValidation($formRequest,$context[1]);
        });
    }
}
