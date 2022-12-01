@extends('plantilla')
@section('container')
   

  @if (session('confirmacion'))
        <script>
            Swal.fire({
                title: 'Usuario guardado ',
                text: '{{ session('confirmacion')['name'] }} guardado con exito',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            })
        </script>
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
                <form action="{{route('user.store')}}" method="POST">
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
