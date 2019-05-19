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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/about','PagesController@about');


Route::get('/hello', function () {
    return '<h1>Hello world<h1>';
});
Route::resource('pemesanans','PemesananController');


Route::resource('shirts','BajuController');