@foreach ($resultadoCon as $consulta)
    <!-- Modal -->
    <div class="modal fade" id="modalactualizar{{ $consulta->Id_user }}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalactualizar{{ $consulta->Id_user }}"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Actualizar usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container col-md-6">
                        <div class="card text-center mb-5">


                            <div class="card-body">
                                <form method="POST" action="{{ route('user.update', $consulta->Id_user) }}">
                                    @csrf
                                    {!! method_field('PUT') !!}
                                    <div class="dmb-3">
                                        <label class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" name="txtName"
                                            value="{{ $consulta->Name }}">
                                        <p class="text-danger fst-italic"> {{ $errors->first('txtName') }} </p>
                                    </div>
                                    <div>
                                        <label class="form-label">Email:</label>
                                        <input type="text" class="form-control mg-4" name="txtEmail"
                                            value="{{ $consulta->email }}">
                                        <p class="text-danger fst-italic"> {{ $errors->first('txtEmail') }}</p>
                                    </div>
                                    <div>
                                        <label class="form-label">Ine:</label>
                                        <input type="text" class="form-control mg-4" name="txtIne"
                                            value="{{ $consulta->ine }}">
                                        <p class="text-danger fst-italic"> {{ $errors->first('txtIne') }}</p>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                    <button type="" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach