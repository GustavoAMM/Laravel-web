
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body class="">
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


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid" style="background-color: rgba(0, 0, 0, 0.2);">
            <a class="navbar-brand" @disabled(true)>Libreria</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('principal') ? 'text-primary' : '' }}"
                            href="/">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('libro.create') ? 'text-primary' : '' }}"
                            href="{{ route('libro.create') }}">Libro</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->routeIs('libro.index') ? 'text-primary' : '' }}"
                            href="{{ route('libro.index') }}">Mis libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.create') ? 'text-primary' : '' }}"
                            href="{{ route('user.create') }}">Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.index') ? 'text-primary' : '' }}"
                            href="{{ route('user.index') }}">クライアント</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4 px-5" >
        @foreach ($resultadoCon as $consulta)
            <div class="col">
                <div class="px-50">
                    <img src="https://cdn-icons-png.flaticon.com/512/25/25634.png" class="card-img-top w-50 mx-5">
                    <div class="card-body">
                        <h5 class="card-title">{{ $consulta->Name }}</h5>
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
            </div>
        @endforeach
    </div>
    <br>

    <footer class="bg-dark text-white text-center">
        <div class="p-4 pb-0">
            <section class="mb-4">
                Atena
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            ©Libreria Atena {{ $fechaActual_2 = date('D - F - Y') }}
        </div>
    </footer>

</body>
</html>




{{-- @foreach ($resultadoCon as $consulta)
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
@stop --}}
