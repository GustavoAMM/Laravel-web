@extends('plantilla')
@section('container')
<br>
    @foreach ($resultadoCon as $consulta)
        <div class="container col-md-6">
            <div class="card-header text-center fs-4 fw-bolder text-success">
                {{ $consulta->titulo }}
            </div>
            <div class="card-body">
                {{ $consulta->autor }}
                {{ $consulta->editorial }}
            </div>
            <div class="card-footer">
                <button>Actualizar</button>
                <button>Eliminar</button>
            </div>
        </div>
        <br>
    @endforeach
@stop
