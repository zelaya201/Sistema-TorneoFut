@extends('layouts.misTorneos')

@section('titulo', 'Mis torneos')

@section('content')

<!-- <div class="row">
            <div class="col-md-12">
                <h5>Torneos</h5>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <a href="{{route('torneo.create')}}" type="button" class="btn btn-primary">
                    <i class="fa-solid fa-plus"></i>&nbsp;Nuevo torneo
                </a>
            </div>
        </div> -->
<!-- <div class="row">
            <div class="col-md-10">
                <h5>Torneos</h5>
                
            </div>
            <div class="col-md-2 mb-2 d-flex justify-content-end">
                <a href="{{route('torneo.create')}}" type="button" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-plus"></i>&nbsp;Nuevo torneo
                </a>
            </div>
            <hr class="mx-2" style="width: 1080px;">
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <table class="table table-hover caption-top">
                    <caption>Lista de torneos</caption>
                    <thead class="table-dark">
                        <tr>
                            <th style="width:10%;" scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col" style="width:20%">Estado</th>
                            <th scope="col" style="width:20%;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($torneos as $torneo)
                            <tr>
                                <td>{{$torneo->id}}</td>
                                <td>{{$torneo->nombre}}</td>
                                @if ($torneo->estado == 1)
                                    <td>Activo</td>
                                @else
                                    <td>Inactivo</td>
                                @endif
                                <td>
                                    <a href="{{route('torneo.edit', $torneo)}}">Editar</a>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-pencil-alt text-info fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>278</h3>
                <p class="mb-0">New Posts</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
                <h3 class="text-danger">278</h3>
                <p class="mb-0">New Projects</p>
              </div>
              <div class="align-self-center">
                <i class="fas fa-rocket text-danger fa-3x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div> -->
<!-- <div class="row align-items-center">
    <div class="col">
        <h4>Torneos</h4>
    </div>
    <div class="col-md-2 mb-2 d-flex justify-content-end">
        <a href="{{route('torneo.create')}}" type="button" style="text-decoration: none;" class="fw-semibold">
            Nuevo torneo
        </a>
    </div>
  </div> -->
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