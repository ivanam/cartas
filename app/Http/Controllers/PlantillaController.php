<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ModeloUsuario as Modelo;

class PlantillaController extends Controller
{
    public function armarplantilla($id){
    	$modelo = Modelo::find($id);
    	$contenido = $modelo->contenido;
    	return view('plantillas/customview',["contenido"=>$contenido]);
    	//return "1";
    }
}
