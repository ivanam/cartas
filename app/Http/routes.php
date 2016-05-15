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
    return view('welcome');
});

Route::get('/creador',function(){
	return view('crearvista');
});

Route::get('/plantillas',function(){
	return view('plantillas/carta_invitacion');
});

Route::post('enviar', 'MailController@enviar');

Route::post('guardar','PdfController@guardar');