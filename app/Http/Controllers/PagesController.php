<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class PagesController extends Controller
{
    public function fnIndex(){
        return view('welcome');
    }
/*
    public function fnDetLista($id){
        $xDetAlumnos = Estudiante::findOrFail($id);
        //return view('pagLista', compact('xDetAlumnos'));
    }
*/
    public function fnLista(){
        $xAlumnos = Estudiante::all();
        return view('pagLista', compact('xAlumnos'));
    }


    public function fnGaleria($numero=null){
        $valor = $numero;
        $otro = 25;

        return view('pagGaleria', compact('valor', 'otro'));
    }
    
}
