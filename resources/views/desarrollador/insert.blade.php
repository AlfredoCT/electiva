@extends('layout.layout')

@section('titulo')
    Crear Nuevo Desarrollador
@endsection

@section('contenido')
<h1 class="text-center">Crear Nuevo Desarrollador</h1>
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

        <form action="{{route('desarrollador.store')}} " method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Apellidos:</label>
                    <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Telefono:</label>
                    <input type="text" class="form-control" name="telefono" placeholder="Telefono">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Direccion:</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Direccion">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Proyecto:</label>
                    <input type="number" class="form-control" name="idProyecto" placeholder="Direccion">
                </div>
            </div>
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Crear Desarrollador</button>
            </div>

        </form>
@endsection