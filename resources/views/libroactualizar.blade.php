@foreach ($resultadoCon as $consulta)
    <!-- Modal -->
    <div class="modal fade" id="modalactualizar{{ $consulta->idLibro }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="modalactualizar{{ $consulta->idLibro }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Actualizar libro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container col-md-6">
                        <div class="card text-center mb-5">
                            <div class="card-body">
                                <form method="POST" action="{{ route('libro.update', $consulta->idLibro) }}">
                                    @csrf
                                    {!! method_field('PUT') !!}
                                    <div class="dmb-3">
                                        <label class="form-label">Titulo:</label>
                                        <input type="text" class="form-control" name="txtTitulo"
                                            value="{{ $consulta->titulo }}">
                                        <p class="text-danger fst-italic"> {{ $errors->first('txtTitulo') }} </p>
                                    </div>
                                    <div>
                                        <label class="form-label">Autor:</label>
                                        <input type="text" class="form-control mg-4" name="txtAutor"
                                            value="{{ $consulta->autor }}">
                                        <p class="text-danger fst-italic"> {{ $errors->first('txtAutor') }}</p>
                                    </div>
                                    <div>
                                        <label class="form-label">Páginas:</label>
                                        <input type="text" class="form-control mg-4" name="txtPaginas"
                                            value="{{ $consulta->paginas }}">
                                        <p class="text-danger fst-italic"> {{ $errors->first('txtPaginas') }}</p>
                                    </div>
                                    <div>
                                        <label class="form-label">Editorial:</label>
                                        <input type="text" class="form-control mg-4" name="txtEditorial"
                                            value="{{ $consulta->editorial }}">
                                        <p class="text-danger fst-italic"> {{ $errors->first('txtEditorial') }}</p>
                                    </div>
                                    <div >
                                        <label class="form-label">Email:</label>
                                        <input type="text" class="form-control mg-4" name="txtEmail"
                                            value="{{ $consulta->email }}">
                                        <p class="text-danger fst-italic"> {{ $errors->first('txtEmail') }}</p>
                                    </div>
                                    <div>
                                        <label class="form-label">ISBN:</label>
                                        <input type="text" class="form-control mg-4" name="txtIsbn"
                                            value="{{ $consulta->isbn }}">
                                        <p class="text-danger fst-italic"> {{ $errors->first('txtIsbn') }}</p>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
        </div>
    </div>
@endforeach
