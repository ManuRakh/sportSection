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

Route::get('/','IndexController@index')->name('index');
Route::post('/', 'ClientController@store')->name('addclient');
Route::get('/blog','BlogController@index')->name('blog');
Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
