@extends('layout.layout')

@section('titulo', 'Actualizar desarrollador')

@section('contenido')

<h1 class="text-center">editar desarrollador</h1>
<br><br>

@if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"> <strong>Ups. =)</strong>Algo anda mal...</div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach
        </ul>
    </div>
@endif

<br><br>

        <form action="{{route('desarrollador.update', $desarrollador->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="nombre" Value="{{$desarrollador->nombre}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Apellido:</label>
                    <input type="text" class="form-control" name="apellido" Value="{{$desarrollador->apellido}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Telefono:</label>
                    <input type="text" class="form-control" name="telefono" Value="{{$desarrollador->telefono}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Direccion:</label>
                    <input type="text" class="form-control" name="direccion" Value="{{$desarrollador->direccion}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Proyecto:</label>
                    <input type="number" class="form-control" name="idProyecto" Value="{{$desarrollador->idProyecto}}">
                </div>
            </div>
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Editar Desarrollador</button>
            </div>

        </form>
@endsection