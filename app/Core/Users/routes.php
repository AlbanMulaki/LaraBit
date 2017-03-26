<?php

Route::group(['middleware' => ['web'], 'namespace' => 'App\Core\Users\Controllers'], function() {
  Route::Auth();
});

/**
 * All routes for authenticated users
 */
Route::group(['prefix' => 'cp/users', 'middleware' => ['web', 'auth'], 'namespace' => 'App\Core\Users\Controllers'], function() {
  Route::get('/list', ['as' => 'users.list', 'uses' => 'UsersController@listsUser']);
  Route::group(['prefix' => 'roles', 'middleware' => 'permission:users.roles-view'], function() {
	Route::get('/roles', ['as' => 'users.roles-view', 'uses' => 'UsersController@roles', 'middleware' => 'permission:users.roles-view']);
	Route::post('/roles/change-permission/{roleId}/{permissionId}/{status}', ['as' => 'users.roles-change-permission', 'uses' => 'UsersController@updatePermissionRole', 'middleware' => 'permission:users.roles-change-permission']);
  
    Route::post('/create', ['as' => 'users.roles-createRole', 'uses' => 'UsersController@createRole', 'middleware' => 'permission:users.roles-createRole']);
  
    
  });
});


