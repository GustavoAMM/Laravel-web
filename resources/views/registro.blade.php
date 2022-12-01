@extends('plantilla')
@section('container')

    @if (session('confirmacion'))
        <script>
            Swal.fire({
                title: 'Libro guardado ',
                text: '{{ session('confirmacion')['titulo'] }} guardado con exito',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            })
        </script>
    @endif



    <br>

    <div class="card text-center ">
        <div class="card-header  bg-dark text-white">
            Registro
        </div>

        <div class="card-body bg-secondary">
            <h5 class="card-title">Libro</h5>
            <div class="formulario">
                <form method="POST" action="{{route('libro.store')}}">
                    @csrf
                    <input type="text" name="txtIsbn" placeholder="ISBN" class="rounded border-primary "
                        value={{ old('txtIsbn') }}><br>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtIsbn') }} </p>
                    <input type="text" name="txtTitulo" placeholder="Titulo" class="rounded border-primary"
                        value={{ old('txtTitulo') }}><br>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtTitulo') }} </p>
                    <input type="text" name="txtAutor" placeholder="Autor" class="rounded border-primary"
                        value={{ old('txtAutor') }}><br>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtAutor') }} </p>
                    <input type="txt" name="txtPaginas" placeholder="Páginas" class="rounded border-primary"
                        value={{ old('txtPaginas') }}><br>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtPaginas') }} </p>
                    <input type="text" name="txtEditorial" placeholder="Editorial" class="rounded border-primary"
                        value={{ old('txtEditorial') }}><br>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtEditorial') }} </p>
                    <input type="txt" name="txtEmail" placeholder="Email de editorial" class="rounded border-primary"
                        value={{ old('txtEmail') }}><br>
                    <p class="text-danger fst-italic"> {{ $errors->first('txtEmail') }} </p>

                    <button type="submit" class="btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <div class="card-footer text-muted bg-dark">
            <br>
        </div>
    </div>
    <br>
@stop
