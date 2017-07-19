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




Route::group(['middleware' => ['web','auth'], 'namespace' => 'App\Core\Images\Controllers'], function() {
  Route::get('/assets/image/{filename}/{thumbnail}', ['as'=>'images.image-get',  'uses' => 'ImagesController@getResourceImage','middleware'=>['permission:images.image-get']])->where('filename', '(.*(?:%2F:)?.*)');
  Route::post('/assets/imageUpload/{saveTo}', ['as'=>'images.image-upload',  'uses' => 'ImagesController@uploadImage','middleware'=>['permission:images.image-upload']])->where('saveTo', '(.*(?:%2F:)?.*)');
});
