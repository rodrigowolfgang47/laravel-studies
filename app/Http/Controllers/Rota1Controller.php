<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rota1Controller extends Controller
{   
    /* Nesse controler são passados dois parametros que podem ser enviados
    para as viwes de tres forma diferentes, através de um array assossiativo,
    método with e compact */

    function rota1(int $n1, int $n2){
        $x = $n1 + $n2;
        
        // Array assossiativo
        // return view('site.teste', ["n1" => $n1, "n2" => $n2, "x" => $n1 + $n2]);

        // Método compact(Mais utilizado) 
        // return view('site.teste', compact('n1', 'n2', 'x'));

        //Método with
        return view('site.teste')->with("n1", $n1)->with("n2", $n2)->with('x',$x);
    }
}
