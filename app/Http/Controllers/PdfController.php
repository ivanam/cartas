<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Storage;
use PDF;

class PdfController extends Controller
{
    
	public function guardar(Request $request){

    	// Crea el pdf correspondiente, lo guarda en el servidor
    	// y lo mando al browser
		$datos = $request->all();
    	$pdf = PDF::loadHTML($datos["contenido"]);
		Storage::disk('local')->put("test.pdf",$pdf->output());
		return "1";
	}
}
