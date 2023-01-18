@extends('layouts.misTorneos')

@section('titulo', 'Mis torneos')

@section('content')
<div class="bg-white rounded-3">
  <div class="ms-3 me-3">
    <div class="row">
      <!-- <div class="col mt-3">
          <h3>Torneos</h4>
          <hr>
        </div>  -->
      <div class="col-md-10 mt-3">
        <h3>Mis torneos</h5>
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
    <div class="row">
      @foreach ($torneos as $torneo)
      <div class="col-xl-4 col-sm-6 col-12 mb-4">
        <div class="card" data-bs-toggle="modal" data-bs-target="#infoTorneoModal-{{$torneo->id}}" style="cursor: pointer;">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
                <h4 class="fst-italic">{{$torneo->nombre}}</h4>
                <p class="mb-0 fw-light badge bg-danger text-wrap">Click para más información</p>
              </div>
              <div class="align-self-center">
                <i class="fa-solid fa-trophy text-warning fa-3x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('torneo.modals.infoTorneo')
      @endforeach
    </div>
  </div>
</div>

@include('torneo.modals.nuevoTorneo')
<script>
sendEvent = function(sel, step) {
    var sel_event = new CustomEvent('next.m.' + step, {detail: {step: step}});
    window.dispatchEvent(sel_event);
}
</script>

@endsection('content')