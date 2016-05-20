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
                <a class="navbar-brand" href="{{ URL::to('/home') }}">Creador 2.0</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ URL::to('mismodelos') }}">Mis Modelos</a>
                    </li>
                    <li class="active">
                        <a href="#">Modelos Compartidos</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('miscartas')}}">Mis Cartas</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('creador') }}">Crear Modelo de Carta</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="{{ URL::to('logout') }}">Salir</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container" >

            <div class="row">
                <h1> Listado de Modelos</h1>
            </div>

            <br>

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                <table class="table">
                    <thead>
                    <tr>
                        <th> Nombre </th>
                        <th> Descripcion </th>     
                        <th> Compartido por </th>
                        <th> Compartido el </th>
                        <th>  </th>
                    </tr>
                    </thead>

                    @foreach ($modelos as $modelo)
                    <?php
                        echo "<tr>";
                        echo "<td>".$modelo->nombre."</td>";
                        echo "<td>".$modelo->descripcion."</td>";
                        echo "<td>".$modelo->emisor."</td>";
                        echo "<td>".$modelo->created_at."</td>";
                        echo '<td> 
                                <a href="plantillas/'.$modelo->id_modelo.'" class="btn btn-sm btn-primary">
                                    <span class="glyphicon glyphicon-hand-right"></span> Usar
                                </a>
                            </td>';
                        echo "</tr>";
                    ?>
                    @endforeach

                </table>
                </div>
            </div>          
    </div>

    <!--- Scripts -->    
    <script src="{{ URL::asset('static/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/mismodelos.js') }}"></script>
</body>
</html>