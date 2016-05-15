<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Storage;
use PDF;
use Response;

class PdfController extends Controller
{
    
	public function guardar(Request $request){

    	// Crea el pdf correspondiente, lo guarda en el servidor
    	// y lo mando al browser
		$datos = $request->all();
    $pdf = PDF::loadHTML($datos["contenido"]);
    $nombre_archivo = "test.pdf";
		Storage::disk('local')->put($nombre_archivo,$pdf->output());
		return "1";
	}
}
