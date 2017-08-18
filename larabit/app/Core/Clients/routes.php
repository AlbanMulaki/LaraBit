<?php

Route::group(['prefix' => 'cp/control', 'middleware' => ['web', 'auth'], 'namespace' => 'App\Core\Clients\Controllers'], function() {
    Route::get('/', ['as' => 'clients.clientarea', 'uses' => 'ClientsController@clientarea', 'middleware' => 'permission:clients.clientarea']);
    Route::get('/invoices', ['as' => 'clients.clientarea-invoices', 'uses' => 'ClientsController@invoices', 'middleware' => 'permission:clients.clientarea']);
    Route::get('/server', ['as' => 'clients.clientarea-server', 'uses' => 'ClientsController@server', 'middleware' => 'permission:clients.clientarea']);
    Route::get('/hosting', ['as' => 'clients.clientarea-hosting', 'uses' => 'ClientsController@hosting', 'middleware' => 'permission:clients.clientarea']);
});


/**
 * Website Public
 */
Route::group(['namespace' => 'App\Core\Clients\Controllers', 'middleware' => ['web']], function() {
    Route::get('/', ['as' => 'website.home', 'uses' => 'WebsiteController@home']);
    Route::get('/sitemap', ['as' => 'website.sitemap', 'uses' => 'WebsiteController@sitemap']);
    Route::group(['prefix' => 'solutions'], function() {
        Route::get('website-web-apps', ['as' => 'website.solutions-website-web-apps', 'uses' => 'WebsiteController@solutionsWebApps']);
        Route::get('mobile-application', ['as' => 'website.solutions-mobile-application', 'uses' => 'WebsiteController@solutionsMobileApplication']);
    });
});
