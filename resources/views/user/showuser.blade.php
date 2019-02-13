<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
@extends('layouts.master')
@section('content')
    Vista detalle usuario
    <div class="row">
        <div class="col-sm-8">

            <h1>{{$usuario->user}}</h1>
            <h4>Nombre: {{$usuario->name}}</h4>
            <h4>Apellido: {{$usuario->subname}}</h4>
            <h4>Correo: {{$usuario->email}}</h4>
            <h4>Direccion: {{$usuario->address}}</h4>
            
            <a class="btn btn-warning" href="{{ url('/user/edit/' . $usuario->id ) }}">Editar Usuario</a>
            <a class="btn btn-light" href="{{ url('/user' ) }}">Volver al listado</a>
        </div>
    </div>
@stop
</body>
</html>