<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{

    public function home (){
        return view('inicio');
    }

    public function formulario (){
        return view('formulario');
    }

    public function consulta (){
        return view('cliente');
    }
    public function procesarCliente (Request $peticion){
       // return 'la informacion del cliente llego al controlador';
        
        return $peticion->all();
    }
}