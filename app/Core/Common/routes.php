<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/*
 * Decide the path after the login
 */
//Redirect to the right 




Route::group(['middleware' => ['web','auth'], 'namespace' => 'App\Core\Common\Controllers'], function() {
  Route::get('/cp', [ 'uses' => 'CommonController@redirect']);
});
