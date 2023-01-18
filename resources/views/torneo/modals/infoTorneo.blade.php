<div class="modal fade" id="infoTorneoModal-{{$torneo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="get" action="{{route('home', $torneo)}}">
                <!-- @csrf
                @method('put') -->
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Información del torneo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Panel de administración</>
                </div>
            </form>
        </div>
    </div>
</div>