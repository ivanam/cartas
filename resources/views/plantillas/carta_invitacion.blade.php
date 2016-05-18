@extends('plantillas/layaoutCarta')
<!DOCTYPE html>
<html>
<head>
	<title> Creador de Cartas</title>
	
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('static/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- GRID VIEW CSS -->
    <link href="{{ URL::asset('static/css/2-col-portfolio.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('static/css/portada.css') }}" rel="stylesheet">

    <style type="text/css">

        #editable {
          background: #E6E6E6;
          border-radius: 2px;
          /*box-shadow: 0 1px 5px rgba(0,0,0,0.15) inset;*/
          outline: none;
          border: 2px solid transparent;

        }

        #editable:focus{
            background-color: #FFF;
            border-color: #69c773;
        }

        #carta{
            border-radius: 25px;
            border: 5px solid #0B0B61;
            padding: 20px;  
        }

    </style>
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL::to('/') }}">Creador 2.0</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Mis Modelos</a>
                    </li>
                    <li>
                        <a href="#">Modelos Compartidos</a>
                    </li>
                    <li class="active">
                        <a href="{{ URL::to('/creador') }}">Crear Modelo de Carta</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container" >

        <div class="row" id="carta">
            <p>Estimado <span id="editable"contenteditable="true">NOMBRE, APELLIDO</span>:</p>
            <p style="padding-left: 210px;">Lo invito a pariticipar del evento <span id="editable"contenteditable="true">EVENTO</span> a realizarse el dia <span id="editable"contenteditable="true">DIA-DE-EVENTO</span> en <span id="editable"contenteditable="true">LUGAR-EVENTO</span>. <span id="editable"contenteditable="true">MOTIVO-EVENTO</span></p>
            <p>Coordialmente</p>
            <p><span id="editable"contenteditable="true">REMITENTE</span></p>
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

    <!--Modal-->
    <div class="modal fade" id="modal">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body">
            <p></p>
          </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Modal -->
    <div class="modal fade" id="mails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title"> Destinatario</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-lg">
                              <span class="input-group-addon" id="sizing-addon1">@</span>
                              <input id="destinatario" type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <button id="btnEnviarModal" class="btn btn-success pull-right"> Enviar</button> 
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--- Scripts -->    
    <script src="{{ URL::asset('static/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/procesamiento_carta.js') }}"></script>

</body>
</html>