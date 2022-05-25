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

Auth::routes();
Route::get('{any}', function(){
    return view('welcome');
})->where('any','.*');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create','CreateController@index')->name('create');
Route::post('/create/add','CreateController@create')->name('create');
Route::get('/article/{id}','ArticleController@index')->name('article');
Route::get('/edit/{id}','HomeController@edit')->name('edit');
Route::post('/update/{id}','HomeController@update')->name('update');

