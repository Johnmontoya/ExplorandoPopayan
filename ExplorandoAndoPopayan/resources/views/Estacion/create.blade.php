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
            <h1>Crear una nueva estacion</h1>
        </div>
    </body>
@stop

@section('content')
    
<form action="/estaciones" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="6">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Latitud</label>
    <input id="latitud" name="latitud" type="text" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Longitud</label>
    <input id="longitud" name="longitud" type="text" class="form-control" tabindex="5">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Foto</label>
    <input id="foto" name="foto" type="file" class="form-control" accept="image/*" tabindex="6">
  </div>
  <a href="/estaciones" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
  
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop