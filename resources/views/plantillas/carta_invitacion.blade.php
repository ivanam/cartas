<!DOCTYPE html>
<html>
<head>
	<title> Creador de Cartas</title>
	<!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('static/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- GRID VIEW CSS -->
    <link href="{{ URL::asset('static/css/2-col-portfolio.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('static/css/portada.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

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
            border: 5px solid #73AD21;
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
            <button type="button" class="btn btn-lg btn-primary" id="btnDescargar"> Descargar</button>
            <button type="button" class="btn btn-lg btn-primary" id="btnEnviar"> Enviar Mail</button>
        </div>
   
    </div>

    <!--- Scripts -->    
    <script src="{{ URL::asset('static/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/procesamiento_carta.js') }}"></script>

</body>
</html>