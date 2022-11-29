@extends('plantilla')
@section('container')
    @if (session('success'))
    <div class="alert alert-primary" role="alert">
        Cliente Guradado
      </div>
    @endif
<br>
    <div class="card text-center ">
        <div class="card-header">
            Registro
        </div>

        <div class="card-body">
            <h5 class="card-title">Cliente</h5>
            <p class="card-text">Llenar los campos para registrar un nuevo cliente</p>
            <div class="formulario">
                <form action="guardarLibro" method="POST">
                    @csrf
                    <input type="text" name="txtNombre" placeholder="Nombre" class="rounded border-primary"
                        value={{ old('txtNombre') }}><br>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtNombre') }} </p>

                    <input type="text" name="txtEmail" placeholder="Email" class="rounded border-primary"
                        value={{ old('txtEmail') }}><br>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtEmail') }} </p>

                    <input type="text" name="txtIne" placeholder="INE" class="rounded border-primary"
                        value={{ old('txtIne') }}><br>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtIne') }} </p>

                    <button type="submit" class="btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <div class="card-footer text-muted">
            <br>
        </div>
    </div>
    <br>
@endsection
