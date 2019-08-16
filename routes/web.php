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

Route::get('/', 'PhotoController@index')->name('home');

Route::get('/galeria', 'PhotoController@galeria')->name('galeria');

Route::post('/', 'PhotoController@guardar')->name('fotos.guardar');