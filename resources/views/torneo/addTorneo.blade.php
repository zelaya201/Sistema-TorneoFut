@extends('layouts.app')

@section('titulo', 'Nuevo torneo')

@section('content')
<div class="container me-2">
        <div class="row">
            <div class="col-md-10">
                <h5>Torneos / Nuevo torneo</h5>
                
            </div>
            <div class="col-md-2 mb-2 d-flex justify-content-end">
                <a type="button" class="btn btn-light btn-sm" href="/Torneos" >
                    <i class="fa-sharp fa-solid fa-chevron-left"></i>&nbsp;Regresar
                </a>
            </div>
            <hr class="mx-2" style="width: 1080px;">
        </div>
        <div>
            <form action="{{ route('torneo.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nomTorneo" class="form-label">Nombre del torneo</label>
                    <input type="text" class="form-control" id="nomTorneo" name="nomTorneo" placeholder="Nombre del torneo">
                </div>
                <div class="mb-3">
                    <label for="estadoTorneo" class="form-label">Estado del torneo</label>
                    <select class="form-select" id="estadoTorneo" name="estadoTorneo">
                        <option value="" disabled selected>Seleccione...</option>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Añadir torneo</button>
                </div>
            </form> 
        </div>
    </div>
@endsection('content')