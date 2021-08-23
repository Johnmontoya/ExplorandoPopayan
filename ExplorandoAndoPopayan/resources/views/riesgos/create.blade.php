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
        <h1>Crear un nuevo riesgo</h1>
        </div>
    </body>
@stop

@section('content')
    
<form action="/riesgos" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Tipo del riesgo</label>
    <input id="tipo_riesgo" name="tipo_riesgo" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ubicacion del accidente</label>
    <input id="ubicacion" name="ubicacion" type="text" class="form-control" tabindex="2">
  </div>
  <label for="">Evento donde se encuentra</label>
  <select name="id_evento" class="form-control mb-2">
  <option selected="true" disabled="disabled" >Seleccione un evento</option>
            @foreach ($lis_eventos as $evento)
                <option value="{{$evento['id']}}">{{$evento['nombre']}}</option>
            @endforeach
        </select>
  <a href="/riesgos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop