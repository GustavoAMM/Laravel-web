<!-- Modal -->
@foreach ($resultadoCon as $consulta)
    <div class="modal fade" id="modaleliminar{{ $consulta->Id_user }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="modaleliminar{{ $consulta->Id_user }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar libro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Nombre: {{ $consulta->Name }}</h6>
                    <h6>ISBN: {{ $consulta->email }}</h6>
                    <h6>Autor: {{ $consulta->ine }}</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{route('user.delete',$consulta->Id_user)}}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="mx-3 btn btn-danger">Eliminar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
