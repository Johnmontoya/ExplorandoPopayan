@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
   <form action="/usuarios/{{$usuario->id}}" method="POST">    
   @csrf
   @method('PUT')
   <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="name" name="name" type="text" class="form-control" value="{{$usuario->name}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input id="email" name="email" type="email" class="form-control" value="{{$usuario->email}}">
  </div>
  <a href="/usuarios" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-success">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop