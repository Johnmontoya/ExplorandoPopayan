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
            <h1>Lista de Riesgos</h1>
        </div>
    </body>
@stop

@section('content')

   <a href="riesgos/create" class="btn btn-success mb-3">Crear un nuevo riesgo</a>

<table id="riesgos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-success text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Riesgos</th>
            <th scope="col">Ubicacion</th>
            <th scope="col">Eventos</th>
            <th scope="col">Acciones</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($riesgos as $riesgo)
        <tr>
            <td>{{$riesgo->id}}</td>
            <td>{{$riesgo->tipo_riesgo}}</td>
            <td>{{$riesgo->ubicacion}}</td>
            <td>{{$riesgo->id_evento}}</td>
           
            <td>
                <form action="{{ route ('riesgos.destroy',$riesgo->id)}}" method="POST">
                <a href="/riesgos/{{ $riesgo->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#riesgos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop