<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ModeloUsuario as Modelo;

class ModeloController extends Controller
{
    public function crear(Request $request){
    	$datos = $request->all();
    	$cadena = $datos["contenido"];
    	$nombre = $datos["nombre"];
    	$descripcion = $datos["descripcion"];
    	$cadena = preg_replace('/\[(\w+)\]/', '<span class="editable" contenteditable="true">${1}</span>', $cadena);
    	$plantilla = new Modelo;
    	$plantilla->usuario ="leandro";
    	$plantilla->contenido = $cadena;
    	$plantilla->nombre = $nombre;
    	$plantilla->descripcion = $descripcion;
    	$plantilla->save();
    	return $cadena;
    }

    public function mismodelos(){

    	$modelos = Modelo::where('usuario','=',"leandro")->get();
    	return view("mismodelos",['modelos'=>$modelos]);
    }
}
