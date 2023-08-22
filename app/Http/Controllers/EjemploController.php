<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    //
    public function index(){
        //return "hola esto es usuarios controlador";
        return view('index');
    }

    public function create(){
        //return "hola  esto es usuarios crear controlador";
        return view('create');
    }

    public function show($idusuario, $nombreusuario=null){
        if($nombreusuario){
            return "Cumple el if: Hola usuario " .$nombreusuario ." tu id es " .$idusuario;
        }
        else{
            return "Hola tu id es: " .$idusuario;
        }
    }

}

