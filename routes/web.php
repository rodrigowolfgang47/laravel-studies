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

// Modelo de rota call back onde há uma requisição e um retorno através da função 
// Route::get('/', function () {
//     return "Olá Mundo";
// });

// Modelo em que a rota aciona um controler atraves da sintaxe NomeDoController@NomeDaFuncao

Route::get('/', 'PrincipalController@principal');

Route::get('/contato', 'ContatoController@contato');

Route::get('/quem-somos', 'QuemSomosController@quemSomos');

/*  Rotas com parametros: Para receber parametros é necessário 
    passar este paremetro entre chaves {} e para ulitilizar esses parametros
    temos que atribuir variáveis podendo ser tipadas nas funções na ordem
    em que os parametros são passados para as rotas, ou seja, os parametros
    tem relação direta com a odem das váriáveis.
*/
Route::get('/contato/{nome}/{categoria_id}', 'ContatoController@contatoNome')->where('categoria_id', '[0-9]')->where('nome', '[A-Za-z]+');
