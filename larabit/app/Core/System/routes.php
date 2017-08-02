<?php

Route::group(['prefix' => 'cp/system', 'middleware' => ['web', 'auth'], 'namespace' => 'App\Core\System\Controllers'], function() {
    Route::group(['prefix' => 'monitor'], function() {
        Route::get('/', ['as' => 'system.monitor', 'uses' => 'MonitorController@status', 'middleware' => 'permission:system.monitor']);
        Route::post('/health-server', ['as' => 'system.monitor.health-server',
            'uses' => 'MonitorController@healthServer',
            'middleware' => 'permission:system.monitor.health-server']);
    });
});
