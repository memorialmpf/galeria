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
Route::get('/', 'FrontController@index')->name('home');
Route::get('/inicial/{webservice?}}', 'FrontController@index')->name('home_webservice');
Route::get('/detalhe_sub/{matricula}/{webservice?}', 'FrontController@detalhe_sub')->name('detalhe_sub');
Route::get('/detalhe_pgr/{matricula}/{webservice?}', 'FrontController@detalhe_pgr')->name('detalhe_pgr');
Route::get('/detalhe_conselho/{matricula}/{webservice?}', 'FrontController@detalhe_conselho')->name('detalhe_conselho');

Route::get('/detalhe/{matricula}', 'FrontController@detalhe')->name('detalhe');
Route::get('/detalhes/{matricula}', 'FrontController@detalhes')->name('detalhes');
Route::get('/conselho', 'FrontController@conselho')->name('conselho_lista');
Route::get('/pgrs', 'FrontController@pgrs')->name('pgrs_lista');
Route::get('/subprocuradores', 'FrontController@subprocuradores')->name('subprocuradores_lista');
Route::get('/estado/{uf}', 'FrontController@estado')->name('estado_lista');
Route::get('/estados/{uf}', 'FrontController@estados')->name('estados_lista');
