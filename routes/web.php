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

Route::get('/', 'HomeController@index');

Route::get('/{category}', 'HomeController@category')->name('category');

Route::get('/{category}/{product}', 'HomeController@product')->name('product');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
