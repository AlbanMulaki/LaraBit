<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
Route::get('/home', 'HomeController@index');
Route::get('/list2', ['as' => 'roles.list',
    'uses' => 'HomeController@index',
    'middleware'=>['auth','permission:view']]);