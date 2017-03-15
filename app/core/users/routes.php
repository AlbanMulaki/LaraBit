<?php

Route::group(['middleware' => ['web'], 'namespace' => 'App\Core\Users\Controllers'], function() {
    Route::Auth();
});

/**
 * All routes for authenticated users
 */
Route::group(['prefix' => 'cp', 'middleware' => ['web', 'auth'], 'namespace' => 'App\Core\Users\Controllers'], function() {
    Route::get('/index', ['as' => 'users.list', 'uses' => 'UsersController@index']);
    Route::get('/roles', ['as' => 'users.roles', 'uses' => 'UsersController@index']);
    Route::get('/', ['uses' => 'UsersController@routes']);
});
