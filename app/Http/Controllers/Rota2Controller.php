<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


// A rota redireciona o usário para outra rota escolhida
class Rota2Controller extends Controller{

    function rota2(){
        return redirect()->route('site.rota1');
    }
}
