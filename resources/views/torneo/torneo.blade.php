@extends('layouts.app')

@section('titulo', 'Torneos')

@section('content')
    <div class="container ms-2 me-2">
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
        <div class="row">
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
        </div>
    </div>
@endsection('content')