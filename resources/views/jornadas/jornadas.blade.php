@extends('layouts.app')

@section('titulo', 'Jornadas')

@section('content')
<div class="bg-white rounded-3">
  <div class="ms-3 me-3">
    <div class="row">
      <div class="col-md-10 mt-3">
        <h3>Jornadas</h5>
      </div>
      <div class="col-md-2 mb-2 d-flex justify-content-end mt-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoTorneoModal">
          <i class="fa-solid fa-plus"></i>&nbsp;Nuevo torneo
        </button>
      </div>
      <div class="row">
        <hr class="ms-3">
      </div>
    </div>
  </div>
</div>
@endsection('content')