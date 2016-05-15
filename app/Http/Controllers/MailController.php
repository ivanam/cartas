<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Storage;
use PDF;

class MailController extends Controller
{
    public function enviar(Request $request){

    	$datos = $request->all();
    	$pdf = PDF::loadHTML($datos["destino"]);
    	$destino = $datos["destino"];
		Storage::disk('local')->put("test.pdf",$pdf->output());
    	$r= Mail::queue('emails.info',array(),function($msj){
    	 	$msj->subject('Carta Generada');
    	 	//$msj->to($destino);
    	 	$msj->to("leandroluque.tw@gmail.com");
    	 	$msj->attach(storage_path('app')."/test.pdf");
    	});
    	return $destino;
    }
}
