@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>Crear Foto</h1>
@stop

@section('content')
    
<form action="/galerias" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Foto</label>
    <input id="foto" name="foto" type="file" class="form-control" accept="image/*" tabindex="1">
  </div>
  <select name="id_evento" class="form-control mb-2">
            @foreach ($lis_eventos as $evento)
                <option value="{{$evento['id']}}">{{$evento['nombre']}} {{$evento['fecha']}} {{$evento['hora']}} {{$evento['punto_encuentro']}}</option>
            @endforeach
        </select>
  <a href="/galerias" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
  
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop