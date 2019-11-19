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
    return view('main');
});
Route::get('/jovens', 'JovemController@listar');
Route::get('/jovens/cadastrar', 'JovemController@cadastrar');
Route::post('/jovens/salvar/{id}', 'JovemController@salvar');
Route::get('/jovens/editar/{id}', 'JovemController@editar');
Route::get('/jovens/excluir/{id}', 'JovemController@excluir');
Route::get('/adultos', 'AdultoController@listar');
Route::get('/adultos/cadastrar', 'AdultoController@cadastrar');
Route::post('/adultos/salvar/{id}', 'AdultoController@salvar');
Route::get('/adultos/editar/{id}', 'AdultoController@editar');
Route::get('/adultos/excluir/{id}', 'AdultoController@excluir');
Route::get('/idosos', 'IdosoController@listar');
Route::get('/idosos/cadastrar', 'IdosoController@cadastrar');
Route::post('/idosos/salvar/{id}', 'IdosoController@salvar');
Route::get('/idosos/editar/{id}', 'IdosoController@editar');
Route::get('/idosos/excluir/{id}', 'IdosoController@excluir');
