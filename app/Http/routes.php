<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;


Route::get('/', function () {
    return redirect('login');
});

Route::get('creador',function(){
	return view('crearvista');
});

Route::get('plantillas/carta_invitacion',function(){
	return view('plantillas/carta_invitacion');
});
Route::get('plantillas/carta_despido', function(){
	return view('plantillas/carta_despido');
});
Route::get('plantillas/carta_reclamo', function(){
	return view('plantillas/carta_reclamo');
});
Route::get('plantillas/carta_rector', function(){
	return view('plantillas/carta_rector');
});

Route::get('plantillas/carta_despido',function(){
	return view('plantillas/carta_despido');
});

Route::get('plantillas/{id}','PlantillaController@armarplantilla');

Route::post('enviar', 'MailController@enviar');

Route::get('login', 'AuthController@showLogin'); // Mostrar login
Route::post('login', 'AuthController@postLogin'); // Verificar datos
Route::get('logout', 'AuthController@logOut'); // Finalizar sesión

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('mismodelos','ModeloController@mismodelos');
Route::post('crear','ModeloController@crear');
Route::get('compartidos','ModeloController@compartidos');
Route::post('compartir','ModeloController@compartir');

Route::get('miscartas','CartaController@miscartas');

Route::get('descargar/{nombre}','PdfController@descargar');
Route::post('guardar','PdfController@guardar');