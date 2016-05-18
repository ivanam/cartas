
@extends('plantillas.layaout')
@section('contenido')
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
                <a href="{{ URL::to('plantillas/carta_invitacion') }}">Carta 1</a>
            </h3>
            <p>Modelo de carta de invitación</p>
        </div>
        <div class="col-md-6 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="{{ URL::asset('static/img/placeholder-img.png') }}" alt="">
            </a>
            <h3>
                <a href="{{ URL::to('plantillas/carta_despido') }}">Carta 2</a>
            </h3>
            <p>Modelo de carta de despido</p>
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
                <a href="{{ URL::to('plantillas/carta_reclamo') }}">Carta 3</a>
            </h3>
            <p>Modelo de carta de reclamo a la municipalidad</p>
        </div>
        <div class="col-md-6 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="{{ URL::asset('static/img/placeholder-img.png') }}" alt="">
            </a>
            <h3>
                <a href="{{ URL::to('plantillas/carta_rector') }}">Carta 4</a>
            </h3>
            <p>Modelo de carta al rector para reincorporación</p>
        </div>
    </div>
</div>
<!-- /.container -->
@endsection