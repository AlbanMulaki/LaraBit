<?php

Route::group(['middleware' => ['web'], 'namespace' => 'App\Core\Users\Controllers'], function() {
    Route::Auth();
});

/**
 * All routes for authenticated users
 */
Route::group(['prefix'=>'cp','middleware' => ['web', 'permission:view'], 'namespace' => 'App\Core\Users\Controllers'], function() {
    Route::get('/list', ['uses' => 'UsersController@index', 'middleware' => ['permission:view']]);
    Route::get('/', ['uses' => 'UsersController@routes', 'middleware' => ['permission:view']]);
});
