<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




Route::group(['prefix'=>'cp/dashboard', 'middleware' => ['web','auth'], 'namespace' => 'App\Core\Dashboard\Controllers'], function() {
  Route::get('/', ['as'=>'dashboard.stats', 'uses' => 'DashboardController@dashboard']);
});