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
        <h1>Crear un nuevo evento</h1>
        </div>
    </body>
@stop

@section('content')
<div class=" pull-right">
        <a class="btn btn-success" href="{{ route('eventos.index') }}">Volver</a>
    </div>
    
<form action="/eventos"  method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Hora</label>
    <input id="hora" name="hora" type="time" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Encuentro</label>
    <input id="punto_encuentro" name="punto_encuentro" type="text" class="form-control" tabindex="4">
  </div>
  <a href="/eventos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop