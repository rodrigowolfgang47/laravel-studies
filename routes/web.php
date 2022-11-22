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

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/quem-somos', 'QuemSomosController@quemSomos')->name('site.quemsomos');

Route::get('/login', function () {return 'Login'; })->name('site.login');

/*  Rotas com parametros: Para receber parametros é necessário 
passar este paremetro entre chaves {} e para ulitilizar esses parametros
temos que atribuir variáveis podendo ser tipadas nas funções na ordem
em que os parametros são passados para as rotas, ou seja, os parametros
tem relação direta com a odem das váriáveis.
*/
Route::get('/contato/{nome}/{categoria_id}', 'ContatoController@contatoNome')->where('categoria_id', '[0-9]')->where('nome', '[A-Za-z]+');


/* Agrupar rotas com um prefixo, significa colocar as rotas dentro de um 
grupo onde aquela rota passar ser acessada a partir 
do " 'nome do prefixo(ex: /app )' + 'nome da rota' " */

Route::prefix('/app')->group(function () {
    Route::get('/fornecedores', function () {
        return 'Fornecedores'; }
    )->name('app.fornecedores');

    Route::get('/clientes', function () {
        return 'Clientes'; }
    )->name('app.clientes');

    Route::get('/produtos', function () {
        return 'Produtos'; }
    )->name('app.produtos');
});






















// Rota de teste para redirecionamento

Route::get('/rota1/{n1}/{n2}', 'Rota1Controller@rota1')->name('site.rota1');

Route::get('/rota2', 'Rota2Controller@rota2')->name('site.rota2');

/* Fallback de teste implementado direto nas rotas, o correto é
utilizar os controler e as views para esse fim.
 */

Route::fallback(function(){
    return 'Página não existe';
});