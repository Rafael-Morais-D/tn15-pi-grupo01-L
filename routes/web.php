<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});


// PÁGINAS ADMINISTRATIVAS

Route::get('/adm-usuario', function () {
    return view('adm-usuario');
});

Route::get('/adm-categoria', function () {
    return view('adm-categoria');
});

Route::get('/adm-produto', function () {
    return view('adm-produto');
});

Route::get('/adm-mensagem', function () {
    return view('adm-mensagem');
});

Route::get('/adm-historico-pedidos', function () {
    return view('adm-historico-pedidos');
});

// PÁGINAS DE USUÁRIO

Route::get('/user-edicao-usuario', function () {
    return view('user-edicao-usuario');
});

Route::get('/user-minha-conta', function () {
    return view('user-minha-conta');
});

Route::get('/user-meus-pedidos', function () {
    return view('user-meus-pedidos');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
