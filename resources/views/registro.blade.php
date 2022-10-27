@extends('plantilla')
@section('container')

@if (session()->has('success'))
  {!! "<script>Swal.fire({
    position: 'top-center',
    icon: 'success',
    title: 'Libro guardado',
    showConfirmButton: false,
    timer: 1500
  })</script>" !!}
@endif

 



<br>
<div class="card text-center ">
    <div class="card-header">
      Registro
    </div>
    <div class="card-body">
      <h5 class="card-title">Libro</h5>
      <p class="card-text">Llenar los campos para registrar un nuevo libro</p>
      <div class="formulario">
        <form action="guardarLibro" method="POST">
            @csrf
            <input type="text" name="txtIsbn" placeholder="ISBN" class="rounded border-primary"><br>
            <p class="text-danger fst-italic">   {{$errors->first('txtIsbn')}} </p>
            <input type="text" name="txtTitulo" placeholder="Titulo" class="rounded border-primary" ><br>
            <p class="text-danger fst-italic">   {{$errors->first('txtTitulo')}} </p>
            <input type="text" name="txtAutor" placeholder="Autor" class="rounded border-primary"><br>
            <p class="text-danger fst-italic">   {{$errors->first('txtAutor')}} </p>
            <input type="txt" name="txtPaginas" placeholder="Páginas" class="rounded border-primary"><br>
            <p class="text-danger fst-italic">   {{$errors->first('txtPaginas')}} </p>
            <input type="text" name="txtEditorial" placeholder="Editorial" class="rounded border-primary"><br>
            <p class="text-danger fst-italic">   {{$errors->first('txtEditorial')}} </p>
            <input type="txt" name="txtEmail" placeholder="Email de editorial" class="rounded border-primary"><br>
            <p class="text-danger fst-italic">   {{$errors->first('txtEmail')}} </p>

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