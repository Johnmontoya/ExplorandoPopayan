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
            <h1>Lista de galerias</h1>
        </div>
    </body>
@stop

@section('content')
   <a href="galerias/create" class="btn btn-success mb-3">CREAR</a>

<table id="galerias" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-success text-white">
    <tr>
            <th scope="col">ID</th>
            <th scope="col">Foto</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($galerias as $galeria)
        <tr>
            <td>{{$galeria->id}}</td>
            <td><img class="img-fluid" src="{{asset($galeria->foto)}}" alt="" width="90"></td>
            <td>
                <form action="{{ route ('galerias.destroy',$galeria->id)}}" method="POST">
                <a href="/galerias/{{ $galeria->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#galerias').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop