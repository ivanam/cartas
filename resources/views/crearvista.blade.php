<!DOCTYPE html>
<html>
<head>
    <title> Creador de Cartas</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <div class="container">
        
        <div class="row">
            <textarea id="areaCreacion">Crear tu [carta]</textarea>    
        </div>
        <br>
        <div class="row">
            <button type="button" class="btn btn-lg btn-danger pull-right" id="btnBorrar"> 
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Borrar
            </button>
            <span class="pull-right"> &nbsp;</span>
            <button type="button" class="btn btn-lg btn-success pull-right" id="btnCrear">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Crear
            </button>
        </div>
    </div>


    <div class="modal fade" id="modalEnvio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Creacion Plantilla Propia</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="control-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
              </div>
              <div class="form-group">
                <label for="message-text" class="control-label">Descripcion:</label>
                <textarea class="form-control" id="descripcion"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btnOk">Confirmar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>


    <script src="{{ URL::asset('static/js/tinymce/tinymce.min.js') }}"></script>
    <script>
      tinymce.init({
      selector: '#areaCreacion',
      height: 400,
      plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code'
      ],
      toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      content_css: [
        '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
        '//www.tinymce.com/css/codepen.min.css'
      ]
    });
    </script>
    <script src="{{ URL::asset('static/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('static/js/creacion_carta.js') }}"></script>


</body>
</html>