@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Ruta</h1>
@stop

@section('content')
   <form action="/rutas/{{$ruta->id}}" method="POST">    
   @csrf
   @method('PUT') 
    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre_ruta" name="nombre_ruta" type="text" class="form-control" value="{{$ruta->nombre_ruta}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Partida</label>
    <input id="punto_partida" name="punto_partida" type="text" class="form-control" value="{{$ruta->punto_partida}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Distancia</label>
    <input id="distancia_ruta" name="distancia_ruta" type="text" class="form-control" value="{{$ruta->distancia_ruta}}">
  </div>
  </div>
  <a href="/rutas" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-success">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop