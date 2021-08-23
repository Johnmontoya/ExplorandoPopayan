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
            <h1>Lista de eventos</h1>
        </div>
    </body>
@stop



@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">

    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('eventos.create') }}">Crear un nuevo evento</a>
    </div>
</div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table id="eventos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-success text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Encuentro</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vereventos as $evento)
        <tr>
            <td>{{$evento->id}}</td>
            <td>{{$evento->nombre}}</td>
            <td>{{$evento->fecha}}</td>
            <td>{{$evento->hora}}</td>
            <td>{{$evento->punto_encuentro}}</td>
            <td>
                <form action="{{ route ('eventos.destroy',$evento->id)}}" method="POST">
                <a href="/eventos/{{ $evento->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>    

@endsection




@section('content')
    <p> beautiful admin panel.</p>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
    

