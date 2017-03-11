<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


Route::group(['middleware' => ['web'],'namespace' => 'App\Core\Users\Controllers'], function() {
    Route::Auth();
//    Route::get('/list', ['as' => 'roles.list', 'uses' => 'TestController@getIndex', 'middleware' => ['permission:view']]);
//    Route::get('/login', ['as' => 'login', 'uses' => 'UsersController@showLoginForm']);

});