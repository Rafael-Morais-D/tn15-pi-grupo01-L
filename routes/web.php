<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Auth;
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

Route::get('/cesta-compras', function() {
    return view('cesta-compras');
});

Route::get('/contato', function() {
    return view('contato');
});

Route::get('/pagamento', function() {
    return view('pagamento');
});

Route::get('/erro', function() {
    return view('erro');
});

Route::get('/quem-somos', function() {
    return view('quem-somos');
});


//CONTROLLERS
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// ACESSO AS PÁGINAS ADMINISTRATIVAS - LOGIN E LOGOUT
Route::get('/admin', 'AuthController@formLogin')->name('admin');
Route::get('/admin/login', 'AuthController@showLoginForm')->name('admin.login');
Route::post('/admin/login/do', 'AuthController@login')->name('admin.login.do');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');

// CADASTRO DE USUÁRIOS
Route::get('/cadastro', 'UsersController@createPage')->name('cadastro');
Route::post('/cadastro', 'UsersController@createUser');

// LISTANDO USUARIOS
Route::get('/admin/adm-usuario', 'UsersController@listAllUsers')->name('usuarios');

// EDITAR USUÁRIOS
Route::get('/user-edicao-usuario/{id}', 'UsersController@editUser');
Route::put('/user-edicao-usuario/{id}', 'UsersController@updateUser');

// DELETANDO USUÁRIO
Route::delete('/admin/adm-usuario/{id}', 'UsersController@deleteUser');


Route::get('/user-minha-conta', function () {
    return view('user-minha-conta');
});

Route::get('/user-meus-pedidos', function () {
    return view('user-meus-pedidos');
});



// CATEGORIAS
Route::get('/admin/adm-categoria', 'CategoriasController@tabela')->name('adm-categoria');;
Route::post('/admin/adm-categoria', 'CategoriasController@create');
Route::put('/admin/adm-categoria/{id}', 'CategoriasController@update');
Route::delete('/admin/adm-categoria/{id}', 'CategoriasController@delete');

// PRODUTOS
Route::get('/admin/adm-produto', function () {
    return view('admin/adm-produto');
});

// MENSAGENS
Route::get('/admin/adm-mensagem', function () {
    return view('admin/adm-mensagem');
});

// HISTORICO DE PEDIDOS
Route::get('/admin/adm-historico-pedidos', function () {
    return view('admin/adm-historico-pedidos');
});
