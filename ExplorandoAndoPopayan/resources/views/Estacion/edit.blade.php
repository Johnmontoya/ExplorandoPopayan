@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Estacion</h1>
@stop

@section('content')
   <form action="/estaciones/{{$estacion->id}}" method="POST" enctype="multipart/form-data">    
   @csrf
   @method('PUT')
   <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$estacion->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$estacion->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Latitud</label>
    <input id="latitud" name="latitud" type="text" class="form-control" value="{{$estacion->latitud}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Longitud</label>
    <input id="longitud" name="longitud" type="text" class="form-control" value="{{$estacion->longitud}}">
  </div>
  <a href="/estaciones" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-success">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop