@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>Crear Usuario</h1>
@stop

@section('content')
<div class=" pull-right">
        <a class="btn btn-success" href="{{ route('usuarios.index') }}">Volver</a>
    </div>  
<form action="/usuarios" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="name" name="name" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input id="email" name="email" type="email" class="form-control" tabindex="2">
  </div>
  <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop