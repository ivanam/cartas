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
    	$pdf = PDF::loadHTML($datos["contenido"])->setOrientation("landscape");
		Storage::disk('local')->put("test.pdf",$pdf->output());
    	$r= Mail::queue('emails.info',$datos,function($msj) use($datos){
    	 	$msj->subject('Carta Generada');
    	 	$msj->to($datos["destino"]);
    	 	//$msj->to("leandroluque.tw@gmail.com");
    	 	$msj->attach(storage_path('app')."/test.pdf");
    	});
    }
}
