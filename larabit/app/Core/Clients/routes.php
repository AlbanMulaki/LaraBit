<?php

Route::group(['prefix' => 'cp/control', 'middleware' => ['web', 'auth'], 'namespace' => 'App\Core\Clients\Controllers'], function() {
    Route::get('/', ['as' => 'clients.clientarea', 'uses' => 'ClientsController@clientarea', 'middleware' => 'permission:clients.clientarea']);
    Route::get('/invoices', ['as' => 'clients.clientarea-invoices', 'uses' => 'ClientsController@invoices', 'middleware' => 'permission:clients.clientarea']);
    Route::get('/server', ['as' => 'clients.clientarea-server', 'uses' => 'ClientsController@server', 'middleware' => 'permission:clients.clientarea']);
    Route::get('/hosting', ['as' => 'clients.clientarea-hosting', 'uses' => 'ClientsController@hosting', 'middleware' => 'permission:clients.clientarea']);
});


/**
 * Website Public
 */
Route::group(['namespace' => 'App\Core\Clients\Controllers', 'middleware' => ['web']], function() {
    Route::get('/', ['as' => 'website.home', 'uses' => 'WebsiteController@home']);
    Route::get('/sitemap', ['as' => 'website.sitemap', 'uses' => 'WebsiteController@sitemap']);

    /*     * VPS SERVER* */
    Route::get('/vps-server', ['as' => 'website.vps-server', 'uses' => 'WebsiteController@vpsServer']);
    Route::get('/linux-vps-server-ssd-kvm', ['as' => 'website.vps-server-linux-kvm', 'uses' => 'WebsiteController@vpsServerLinuxKVM']);
    Route::get('/linux-vps-windows-ssd-kvm', ['as' => 'website.vps-server-windows-kvm', 'uses' => 'WebsiteController@vpsServerWindowsKVM']);


    /*** Business Email ***/
    Route::get('/business-email', ['as' => 'website.business-email', 'uses' => 'WebsiteController@businessEmail']);

    /*** About Us  ***/
    Route::get('/about-us', ['as' => 'website.about-us', 'uses' => 'WebsiteController@aboutUs']);
    /*** Domain Names ***/
    Route::get('/domain-names-registration', ['as' => 'website.domain-names-registraton', 'uses' => 'WebsiteController@domainNames']);
    Route::post('/check-domain',['as'=>'website.check-domain','uses'=>'WebsiteController@checkDomainAvailability']);
    
    /*** Cloud VMs  ***/
    Route::get('/products', ['as' => 'website.products', 'uses' => 'WebsiteController@products']);
    
    
    
    
    Route::get('/reseller-hosting', ['as' => 'website.reseller-hosting', 'uses' => 'WebsiteController@resellerHosting']);
    
    
    
    
    Route::get('/web-hosting', ['as' => 'website.web-hosting', 'uses' => 'WebsiteController@webHosting']);
    Route::get('/order/{gid}', ['as' => 'website.web-hosting-order', 'uses' => 'WebsiteController@setOrder']);
    Route::post('/order/send', ['as' => 'website.web-hosting-order-send', 'uses' => 'WebsiteController@sendOrder']);
    Route::post('/calculate-price-cycle', ['as' => 'website.calculate-price-cycle', 'uses' => 'WebsiteController@calculateBilling']);
    Route::group(['prefix' => 'solutions'], function() {
        Route::get('website-web-apps', ['as' => 'website.solutions-website-web-apps', 'uses' => 'WebsiteController@solutionsWebApps']);
        Route::get('mobile-application', ['as' => 'website.solutions-mobile-application', 'uses' => 'WebsiteController@solutionsMobileApplication']);
    });
});
