@extends('plantilla')
@section('container')

@foreach ($resultadoCon as $consulta)
<br>
<div class="container col-md-6">
    <div class="card-header text-center fs-4 fw-bolder">
        {{ $consulta->Name }}
    </div>
    <div class="card-body">
        <h6>Email: {{$consulta->email}}</h6>
        <h6>Ine: {{$consulta->ine}}</h6>
    </div>
    <div class="card-footer">
        <!-- Button trigger modal -->
       
    </div>
</div>
<br>
@endforeach
@stop