<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CartaUsuario;
use Mail;
use Storage;
use PDF;


class MailController extends Controller
{
    public function enviar(Request $request){

    	$info = $request->all();
    	$ruta = CartaUsuario::find($info["id_pdf"])->patharchivo;
    	$r= Mail::send('emails.info',$info,function($msj) use($info,$ruta){
    	   	$msj->subject('Carta Generada');
    	   	$msj->to($info["destino"]);
    	   	$msj->attach($ruta);
    	});
    }
}
