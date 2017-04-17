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
  Route::get('/assets/image/{filename}/{thumbnail}', ['as'=>'images.resourceview',  'uses' => 'ImagesController@getResourceImage','middleware'=>['permission:images.resourceview']]);
  Route::post('/assets/imageUpload/{saveTo?}/{fileName?}', ['as'=>'images.image-upload',  'uses' => 'ImagesController@uploadImage','middleware'=>['permission:images.image-upload']]);
});
