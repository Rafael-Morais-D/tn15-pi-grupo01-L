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

Route::get('/produtos', function() {
    return view('produtos');
});

Route::get('/cadastro', function() {
    return view('cadastro');
});

Route::get('/cesta-compras', function() {
    return view('cesta-compras');
});

Route::get('/contato', function() {
    return view('contato');
});

Route::get('/historico', function() {
    return view('historico');
});

Route::get('/meuspedidos', function() {
    return view('meuspedidos');
});

Route::get('/minhaconta', function() {
    return view('minhaconta');
});


Route::get('/pagamento', function() {
    return view('pagamento');
});

Route::get('/erro', function() {
    return view('erro');
});

Route::get('/quem-somos', function() {
    return view('quem-somos');

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
