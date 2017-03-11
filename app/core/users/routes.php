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

//    // Authentication Routes...
//    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//    Route::post('login', 'Auth\LoginController@login');
//    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//    
//    // Registration Routes...
//    Route::post('register', 'Auth\RegisterController@register');
//    
//    // Password Reset Routes...
//    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
});
