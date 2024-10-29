<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Request\validadorClientes;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }
    public function formulario(){
        return view('formulario');
    }
    
    public function consulta(){
        return view('cliente');
    }

    public function procesarCliente(Request $peticion){

        
        // devuelve todo lo que contiene la peticion
        /* return $peticion->all(); */

        // la ruta donde se hizo la peticion
        /* return $peticion->path(); */

        //Devuelve la URL completa de la petición
        /* return $peticion->url(); */
        
        /* return $peticion->ip(); */

        //redireccion usando la ruta
        /* return redirect('/'); */

        //redireccion usando el nombre de la ruta
        /* return redirect()->route('rutaclientes'); */

        //redireccion al origen 
        /* return back(); */

        //redireccion con valores en sesion
        $usuario = $peticion->input('txtnombre');

        session()->flash('exito','se guardo el usuario '.$usuario);

        return to_route('rutaform');
    }
}