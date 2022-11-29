@extends('layouts.app')

@section('titulo', 'Torneos')

@section('content')
    <div class="container ms-2 me-2">
        <div class="row">
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
        </div>
    </div>
@endsection('content')