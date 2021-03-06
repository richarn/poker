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

Route::post('login', 'LogController@index');

Route::get('almacen', 'AlmacenController@index');

Route::get('reporte', 'ReporteController@index');

Route::post('verifyLogin', 'LogController@verifyLogin');

Route::get('contenido', 'ContenidoController@index');

Route::post('store/compra', 'ContenidoController@store_compra');

Route::post('store/pozo', 'ContenidoController@store_pozo');

Route::post('store/Ingresobillar', 'ContenidoController@store_Ingresobillar');

Route::post('store/BebidasYOtros', 'ContenidoController@store_BebidasYOtros');

Route::post('store/comestibles', 'ContenidoController@store_comestibles');

Route::post('store/ventaBebida', 'ContenidoController@store_ventaBebida');

Route::post('store/ventaComida', 'ContenidoController@store_ventaComida');

Route::post('reporte/reporte_bebida', 'ReporteController@reporte_bebida');

Route::post('reporte/reporte_comida', 'ReporteController@reporte_comida');

Route::post('reporte/reporte_billar', 'ReporteController@reporte_billar');

Route::post('reporte/reporte_Pozo', 'ReporteController@reporte_Pozo');

Route::post('reporte/reporte_total', 'ReporteController@reporte_total');

Route::post('reporte/reporte_costo', 'ReporteController@reporte_costo');

Route::post('reporte/reporte_semana', 'ReporteController@reporte_semana');

Route::post('reporte/lista_costo', 'ReporteController@lista_costo');

Route::post('reporte/sum_sema', 'ReporteController@sum_sema');

Route::post('reporte/cierre_dia', 'ReporteController@cierre_dia');

Route::post('update/update_bebida', 'ContenidoController@update_bebida');

Route::post('update/update_comida', 'ContenidoController@update_comida');

Route::post('bebida/getPrecioB', 'ContenidoController@getPrecioB');

Route::post('bebida/getPrecioC', 'ContenidoController@getPrecioC');

Route::post('bebida/getPrecioFi', 'ContenidoController@getPrecioFi');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('tipo/{type}', 'SweetController@notification');
