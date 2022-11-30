@extends('plantilla')
@section('container')
    @include('libroeliminar')
    @include('libroactualizar')
    <br>
    @if (session()->has('Eliminacion'))
        {!! "<script>Swal.fire(
                        'Correcto',
                        'Libro eliminado',
                        'success'
                    )</script>" !!}
    @endif
    @if (session()->has('actualizado'))
        {!! "<script>Swal.fire(
                    'Correcto',
                    'Libro Actualizado',
                    'success'
                )</script>" !!}
    @endif
    @foreach ($resultadoCon as $consulta)
        <div class="container col-md-6">
            <div class="card-header text-center fs-4 fw-bolder">
                {{ $consulta->titulo }}
            </div>
            <div class="card-body">
                <h6>ISBN: {{ $consulta->isbn }}</h6>
                <h6>Autor: {{ $consulta->autor }}</h6>
                <h6>Editorial: {{ $consulta->editorial }}</h6>
            </div>
            <div class="card-footer">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modalactualizar{{ $consulta->idLibro }}">
                    Actualizar
                </button>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#modaleliminar{{ $consulta->idLibro }}">
                    Eliminar
                </button>
            </div>
        </div>
        <br>
    @endforeach
@stop
