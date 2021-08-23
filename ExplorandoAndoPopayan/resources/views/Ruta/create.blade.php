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
        <h1>Crea una nueva ruta</h1>
        </div>
    </body>
@stop

@section('content')
<div class=" pull-right">
        <a class="btn btn-success" href="{{ route('rutas.index') }}">Volver</a>
    </div>  
<form action="/rutas" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre_ruta" name="nombre_ruta" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Partida</label>
    <input id="punto_partida" name="punto_partida" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Distancia</label>
    <input id="distancia_ruta" name="distancia_ruta" type="text" class="form-control" tabindex="3">
  </div>
  <label for="">Eventos</label>
  <select name="id_evento" class="form-control mb-2">
  <option selected="true" disabled="disabled" >Seleccione un evento</option>
            @foreach ($lis_eventos as $evento)
                <option value="{{$evento['id']}}">{{$evento['nombre']}}</option>
            @endforeach
        </select>
  <a href="/rutas" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop