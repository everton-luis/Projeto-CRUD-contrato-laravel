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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cadastro',function(){
    return view('cadastro');
});

Route::post('/cadastrarcontrato', 'ContratoControlador@cadastrar');

Route::get('/listagem', 'ContratoControlador@listagem');

Route::get('/editarcontrato', 'ContratoControlador@editar');

Route::get('/editarcontrato/{id}', 'ContratoControlador@editar');

Route::post('/atualizarcontrato/{id}','ContratoControlador@atualizar');

Route::get('/deletarcontrato/{id}', 'ContratoControlador@deletar');