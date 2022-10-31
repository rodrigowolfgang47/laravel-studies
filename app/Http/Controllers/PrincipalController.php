<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller 
{
    //Funções são chamadas de actions nesse paradgma
    public function principal(){
        return view('site.principal');
    }
}
