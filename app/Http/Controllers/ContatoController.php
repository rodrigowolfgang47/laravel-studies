<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        return view('site.contato');
    }

    public function contatoNome(

        string $nome,
        int $categoria_id = 0 // Define um valor padrão caso a categoria não seja passada

        ){
        echo "Nome: $nome e Categoria: $categoria_id "; 
    }
}
