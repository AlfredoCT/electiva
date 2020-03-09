@extends('layout.layout')

@section('titulo')
    Detalle de Desarrollador
@endsection

@section('contenido')
    <h1 class = 'text-center'>Detalle de Desarrollador</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Nombre:</h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$desarrollador->nombre}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Apellido:</h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$desarrollador->apellido}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Telefono:</h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$desarrollador->telefono}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Direccion:</h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$desarrollador->direccion}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Proyecto:</h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$desarrollador->idProyecto}}</p>
        </div>
    </div>
  
    <div class="row">
        <a href="{{route('desarrollador.index')}}"><button class="btn btn-primary">volver</button></a>
    </div>

@endsection