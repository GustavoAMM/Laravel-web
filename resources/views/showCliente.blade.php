@extends('plantilla')
@section('container')
@include('modalEliminarUser')
@include('modalActualizarUser')

    @if (session()->has('Eliminacion'))
        {!! "<script>Swal.fire(
                        'Correcto',
                        'Usuario eliminado',
                        'success'
                    )</script>" !!}
    @endif
    @if (session()->has('actualizado'))
        {!! "<script>Swal.fire(
                    'Correcto',
                    'Usuario actualizado',
                    'success'
                )</script>" !!}
    @endif

    @foreach ($resultadoCon as $consulta)
        <br>
        <div class="container col-md-6">
            <div class="card-header text-center fs-4 fw-bolder">
                {{ $consulta->Name }}
            </div>
            <div class="card-body">
                <h6>Email: {{ $consulta->email }}</h6>
                <h6>Ine: {{ $consulta->ine }}</h6>
            </div>
            <div class="card-footer">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modalactualizar{{ $consulta->Id_user }}">
                    Actualizar
                </button>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#modaleliminar{{ $consulta->Id_user }}">
                    Eliminar
                </button>
            </div>
        </div>
        <br>
    @endforeach
@stop
