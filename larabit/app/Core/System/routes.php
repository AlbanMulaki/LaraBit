<?php

Route::group(['prefix' => 'cp/system', 'middleware' => ['web', 'auth'], 'namespace' => 'App\Core\System\Controllers'], function() {
    Route::group(['prefix' => 'monitor'], function() {
        Route::get('/', ['as' => 'system.monitor', 'uses' => 'MonitorController@status', 'middleware' => 'permission:system.monitor']);
        Route::post('/attach-health-server', ['as' => 'system.monitor.attach-health-server',
            'uses' => 'MonitorController@attachHealthServer',
            'middleware' => 'permission:system.monitor.attach-health-server']);
        Route::get('/dettach-health-server/{server_id}/{health_id}', ['as' => 'system.monitor.detach-health-server',
            'uses' => 'MonitorController@dettachHealthServer',
            'middleware' => 'permission:system.monitor.detach-health-server']);
        
    });
});
