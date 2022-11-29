<!-- Modal -->
@foreach ($resultadoCon as $consulta)
    <div class="modal fade" id="modaleliminar{{ $consulta->idLibro }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="modaleliminar{{ $consulta->idLibro }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar libro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Titulo: {{ $consulta->titulo }}</h6>
                    <h6>ISBN: {{ $consulta->isbn }}</h6>
                    <h6>Autor: {{ $consulta->autor }}</h6>
                    <h6>Editorial: {{ $consulta->editorial }}</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{route('libro.delete',$consulta->idLibro)}}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="mx-3 btn btn-danger">Eliminar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
