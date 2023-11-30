<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class PagesController extends Controller
{
    public function fnIndex(){
        return view('welcome');
    }

    public function fnLista(){
        $xxx = Estudiante::all();
        return view('pagLista', compact('xxx'));
    }

    public function fnGaleria($numero=null){
        $valor = $numero;
        $otro = 25;

        return view('pagGaleria', compact('valor', 'otro'));
    }
    
}
