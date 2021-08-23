@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Riesgo</h1>
@stop

@section('content')
   <form action="/riesgos/{{$riesgo->id}}" method="POST">    
   @csrf
   @method('PUT')
   <div class="mb-3">
    <label for="" class="form-label">tipo_riesgo</label>
    <input id="tipo_riesgo" name="tipo_riesgo" type="text" class="form-control" value="{{$riesgo->tipo_riesgo}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">ubicacion</label>
    <input id="ubicacion" name="ubicacion" type="text" class="form-control" value="{{$riesgo->ubicacion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">id evento</label>
    <input id="id_evento" name="id_evento" type="number" class="form-control" value="{{$riesgo->id_evento}}">
  </div>
  
  <a href="/riesgos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-success">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop