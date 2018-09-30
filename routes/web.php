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

Route::get('/', function () {
    return view('welcome');
});

//NOVEDAD
Route::get('/novedades', 'NovedadController@index');

Route::get('/novedades/nuevo', 'NovedadController@create');

Route::post('/novedades/save', 'NovedadController@save');

Route::get('/novedades/{id}', 'NovedadController@show');

//AGENTE
Route::get('/agentes', 'AgenteController@index');


//OPERACION
Route::get('/operaciones', 'OperacionController@index');
Route::get('/operacion/{id}/novedad', 'OperacionController@createNovedad');

Route::post('/operacion/save-novedad', 'OperacionController@saveNovedad');


