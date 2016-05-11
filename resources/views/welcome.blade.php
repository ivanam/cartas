<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página para la creación de cartas formales">
    <meta name="author" content="Grupo 2">

    <title>Creador de Cartas</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('static/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- GRID VIEW CSS -->
    <link href="{{ URL::asset('static/css/2-col-portfolio.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('static/css/portada.css') }}" rel="stylesheet">

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
                <a class="navbar-brand" href="#">Creador 2.0</a>
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
                    <li>
                        <a href="{{ URL::to('/creador') }}">Crear Modelo de Carta</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Modelos Cartas</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class=" over col-md-6 portfolio-item">
                
                    <img class="img-responsive" src="{{ URL::asset('static/img/placeholder-img.png') }}" alt="">
                    <!-- <span class="info glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    <span class=" info glyphicon glyphicon-pencil" aria-hidden="true"></span> -->
                <h3>
                    <a href="#">Carta 1</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="{{ URL::asset('static/img/placeholder-img.png') }}" alt="">
                </a>
                <h3>
                    <a href="#">Carta 2</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="{{ URL::asset('static/img/placeholder-img.png') }}" alt="">

                </a>
                <h3>
                    <a href="#">Carta 3</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="{{ URL::asset('static/img/placeholder-img.png') }}" alt="">
                </a>
                <h3>
                    <a href="#">Carta 4</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 portfolio-item">
                
                    <img class="img-responsive" src="{{ URL::asset('static/img/placeholder-img.png') }}" alt="">
                <h3>
                    <a href="#">Carta 5</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="{{ URL::asset('static/img/placeholder-img.png') }}" alt="">
                </a>
                <h3>
                    <a href="#">Carta 6</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->

        

    </div>
    <!-- /.container -->



    <!--- Scripts -->    
    <script src="{{ URL::asset('static/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/bootstrap.min.js') }}"></script>

</body>

</html>
