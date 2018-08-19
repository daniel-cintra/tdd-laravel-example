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

Route::get('/', 'IndexController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin/gallery', 'GalleryAdminController@index');

    Route::get('/api/gallery-initial-state', 'GalleryAdminController@initialState');

    Route::post('/api/gallery-update-order', 'GalleryAdminController@updateOrder');

});
