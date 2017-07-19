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
    Route::post('/permission', ['as' => 'users.permission-create', 'uses' => 'UsersController@createPermission', 'middleware' => 'permission:users.permission-create']);
    Route::get('/permission', ['as' => 'users.permission-view', 'uses' => 'UsersController@getPermissions', 'middleware' => 'permission:users.permission-view']);

  });

  Route::group(['prefix' => 'profile'], function( ){
      Route::get('/', ['as' => 'users.profile-view', 'uses' => 'UsersController@showProfileForm', 'middleware' => 'permission:users.profile-view']);
  });
});