@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('title', 'ASDI 2021')

@section('content_header')

    <style>
        h1{
            font-family: 'Helveticah';
        }
    </style>
    <body>
        <div id="main-container">
            <h1>Lista de estaciones</h1>
    </body>
@stop

@section('content')
   <a href="estaciones/create" class="btn btn-success mb-3">Crear una nueva estacion</a>

<table id="estaciones" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-success text-white">
    <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Latitud</th>
            <th scope="col">Longitud</th>
            <th scope="col">Foto</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($estaciones as $estacion)
        <tr>
            <td>{{$estacion->id}}</td>
            <td>{{$estacion->nombre}}</td>
            <td>{{$estacion->descripcion}}</td>
            <td>{{$estacion->latitud}}</td>
            <td>{{$estacion->longitud}}</td>
           <td><img src="img/estaciones/{{$estacion->id}}{{$estacion->foto}}" width="100"/></td>
            <td><img class="img-fluid" src="{{asset($estacion->foto)}}" alt="" width="90"></td>
            <td>
                <form action="{{ route ('estaciones.destroy',$estacion->id)}}" method="POST">
                <a href="/estaciones/{{ $estacion->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#estaciones').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop