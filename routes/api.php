<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api'], function(){
    Route::get('posts','Api\PostController@index');
    Route::post('post/create','Api\PostController@create');
    Route::post('edit','Api\PostController@edit');
    Route::post('update','Api\PostController@update');
    Route::post('post/delete/{id}','Api\PostController@delete');
});
