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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clientes', 'ClientesController@home');
Route::get('/clientes/add', 'ClientesController@add');
Route::post('/clientes/cadastrar', 'ClientesController@cadastrar');
Route::get('/clientes/excluir/{id}', 'ClientesController@excluir');
Route::get('/clientes/alterar/{id}', 'ClientesController@alterar');
Route::post('/clientes/alterardb', 'ClientesController@alterardb');

