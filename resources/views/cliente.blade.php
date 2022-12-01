@extends('plantilla')
@section('container')
    @if (session('confirmacion'))
        <script>
            Swal.fire({
                title: 'Usuario guardado ',
                text: 'Usuario guardado con exito',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            })
        </script>
    @endif

    <br>
    <div class="card text-center my-5">
        <div class="card-header bg-dark text-white">
            Registro
        </div>

        <div class="card-body bg-secondary">
            <h5 class="card-title">Cliente</h5>
            <div class="formulario bg-secondary">
                <br>
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <input type="text" name="txtName" placeholder="Nombre" class="rounded border-primary"
                        value={{ old('txtName') }}><br>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtName') }} </p>

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
        <div class="card-footer bg-dark">
            <br>
        </div>
    </div>
    <br>
@endsection
