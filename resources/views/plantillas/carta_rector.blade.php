<!DOCTYPE html>
<html>
<head>
@extends('plantillas/layaout')
@section('encabezado')
</head>
<body>
@section('navigator')
<div class="container" >

        <div class="row" id="carta">
            <p align="right"><span id ="editable" contenteditable="true">Trelew, 17 de junio de 2016</span></p>
        	<b align="left"><span id ="editable" contenteditable="true">Universidad Nacional de la Patagonia San Juan Bosco</span></b>
            <p></p>
            <b align ="left">Rector<span id="editable" contenteditable="true">Prof. Apellido y nombre</span>:</b>
            <p>Asunto reincorporación</p>
            
            <p style="padding-left: 210px;">Quien le suscribe, <span id="editable"contenteditable="true">NOMBRE Y APELLIDO</span>, DNI:<span id="editable"contenteditable="true">NUMERODNI</span>, alumno/a de la carrera de <span id="editable"contenteditable="true">CARRERA</span> que cursa: <span id="editable"contenteditable="true">AÑO</span>:año, solicito mi reincorporación inmediata a la materia de: <span id="editable"contenteditable="true">MATERIA</span> como alumno regular, dictada por el Profesor <span id="editable"contenteditable="true">PROFESOR</span>. </p>
            <p style="padding-left: 210px"> El motivo por el cual me he quedado libre se debe a: <span id="editable"contenteditable="true">MOTIVO</span> En el futuro, haré el mayor esfuerzo para no incurrir nuevamente, en consecuencia a estos motivos solicito a Ud., tenga a bien atender su situación y conceder una respuesta favorable con respecto a la reincorporación.</p>
            <p style="padding-left: 210px"> Atentamente le saluda.</p>
            <p align="right"><span id="editable"contenteditable="true">Apellido y nombre alumno</span> </p>
            <p align="right">DNI:<span id="editable"contenteditable="true">DNI</span></p>
            <p align="right">Email:<span id="editable"contenteditable="true">Apellido y nombre alumno</span></p>
            <p align="right">Firma:_______________________</p>

        </div>

        <br>

        <div class="row">
            <button type="button" class="btn btn-lg btn-primary" id="btnGuardar">
                <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Guardar
            </button>
            <button type="button" class="btn btn-lg btn-primary" id="btnEnviar"> 
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Enviar Mail
            </button>
        </div>
    </div>
@section('modal')
@section('script')
</body>
</html>
 