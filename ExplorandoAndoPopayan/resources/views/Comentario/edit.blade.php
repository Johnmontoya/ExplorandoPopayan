@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')

    <h1>Editar Comentario</h1>
@stop

@section('content')
   <form action="/comentarios/{{$comentario->id}}" method="POST">    
   @csrf
   @method('PUT')
   <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$comentario->descripcion}}">    
  </div>
  <a href="/comentarios" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-success">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop