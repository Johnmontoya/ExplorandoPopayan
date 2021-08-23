@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Evento</h1>
@stop

@section('content')
   <form action="/eventos/{{$evento->id}}" method="POST">    
   @csrf
   @method('PUT')
   <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$evento->nombre_evento}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control" value="{{$evento->fecha_evento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Hora</label>
    <input id="hora" name="hora" type="time" class="form-control" value="{{$evento->hora_evento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Encuentro</label>
    <input id="punto_encuentro" name="punto_encuentro" type="text" class="form-control" value="{{$evento->punto_encuentro}}">
  </div>
  <a href="/eventos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-success">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop