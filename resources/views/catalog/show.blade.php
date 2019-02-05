<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
@extends('layouts.master')
@section('content')
    Vista detalle Juego
    <div class="row">
        <div class="col-sm-4">
            <img src="{{$id_game->image}}" style="height:200px"/>
        </div>
        <div class="col-sm-8">
            <h1>{{$id_game->title}}</h1>
            <h4>Precio: {{$id_game->price}}</h4>
            <h4>Categoria: {{$id_game->category}}</h4>
            <p><strong>Descripción:</strong> {{$id_game->description}}</p>
            <!--@if($id_game->stock==true)
                <p><strong>Estado:</strong> No hay stock</p>
                <a class="btn btn-danger" href="#">Avisar</a>
            @else
                <p><strong>Estado:</strong> Juego disponible</p>
                <a class="btn btn-success" href="#">Comprar Pelicula</a>
            @endif-->
            <a class="btn btn-warning" href="{{ url('/catalog/edit/' . $id_game->id_game ) }}">Editar Juego</a>
            <a class="btn btn-light" href="{{ url('/catalog' ) }}">Volver al listado</a>
        </div>
    </div>
@stop
</body>
</html>