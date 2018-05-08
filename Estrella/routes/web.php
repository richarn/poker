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


Route::get('/', 'LogController@index');

Route::post('login', 'LogController@index');

Route::post('verifyLogin', 'LogController@verifyLogin');

Route::get('contenido', 'ContenidoController@index');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
