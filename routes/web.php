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
Route::post('/jovens', 'JovemController@listar');
Route::get('/jovens/cadastrar', 'JovemController@cadastrar');
Route::post('/jovens/salvar/{id}', 'JovemController@salvar');
Route::post('/jovens/editar/{id}', 'JovemController@editar');
Route::post('/jovens/excluir/{id}', 'JovemController@excluir');
