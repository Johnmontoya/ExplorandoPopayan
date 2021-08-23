@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
<style>
        h1{
            font-family: 'Helveticah';
        }
    </style>
    <body>
        <div id="main-container">
        <h1>Crear un nuevo comentario</h1>
        </div>
    </body>
@stop

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class=" pull-right">

        <a class="btn btn-success" href="{{ route('comentarios.index') }}">Back</a>
    </div>
</div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoopd!</strong>there were some problems with your input.<br><br>
    <ul>

        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>
            
        @endforeach
    </ul>
</div>
@endif    

<div class="col-lg-12">
    <div class="text-center">
        <div class="row justify-content-md-center">
            @foreach ($informacion as $info)
            
                <div class="card-body shadow-sm p-3 mb-5 bg-white rounded col-md-3 mr-2" >
                    <div class="text-rigth">
                        <h5 class="card-title ml-5">{{$info->nombre}}</h5>
                    </div>
                    <div class="text-center mt-5 mr-4">
                    <ul class="list-item">            
                        <li class="list-group-item">Fecha: {{$info->fecha}}</li>
                        <li class="list-group-item">Hora: {{$info->hora}}</li>
                        <li class="list-group-item">Encuentro: {{$info->punto_encuentro}}</li>
                    </ul> 
                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                        <form action="{{ route('welcome.store') }}" method="POST" class="ml-5">
                            @csrf
                            <div class="text-center">
                                <div class="form-group">
                                    <input type="hidden" name="identificador" value="{{$info->id}}">
                                    <input type="hidden" name="usuario" value="{{Auth::user()}}">
                                    <strong>Comentar</strong>
                                    <input type="text" name="descripcion" class="form-control">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form> 
                    </div> 
                </div>

            @endforeach               
 
        </div>
    </div> 
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop