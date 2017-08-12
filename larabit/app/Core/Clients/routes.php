<?php

Route::group(['prefix' => 'cp/control', 'middleware' => ['web', 'auth'], 'namespace' => 'App\Core\Clients\Controllers'], function() {
    Route::get('/', ['as' => 'clients.clientarea', 'uses' => 'ClientsController@clientarea', 'middleware' => 'permission:clients.clientarea']);
    Route::get('/invoices', ['as' => 'clients.clientarea-invoices', 'uses' => 'ClientsController@invoices', 'middleware' => 'permission:clients.clientarea']);
    Route::get('/server', ['as' => 'clients.clientarea-server', 'uses' => 'ClientsController@server', 'middleware' => 'permission:clients.clientarea']);
    Route::get('/hosting', ['as' => 'clients.clientarea-hosting', 'uses' => 'ClientsController@hosting', 'middleware' => 'permission:clients.clientarea']);
});
Route::group(['namespace' => 'App\Core\Clients\Controllers', 'middleware' => ['web']], function() {
    Route::get('/', ['as' => 'website.home', 'uses' => 'WebsiteController@home']);
});
