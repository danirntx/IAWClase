<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
@extends('layouts.master')
@section('content')
    Modificar juego
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar juego
                </div>
                <div class="card-body" style="padding:30px">

                    {{-- TODO: Abrir el formulario e indicar el método POST --}}
                    <form action="#" method="post">
                        {{-- TODO: Protección contra CSRF --}}
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$id->name}}">
                        </div>

                        <div class="form-group">
                            {{-- TODO: Completa el input para el precio --}}
                            <label for="price">Precio</label>
                            <input type="text" name="price" id="price" class="form-control" value="{{$id->price}}">
                        </div>

                        <div class="form-group">
                            {{-- TODO: Completa el input para la categoría --}}
                            <label for="category">Categoría</label>
                            <input type="text" name="category" id="category" class="form-control" value="{{$id->category}}">
                        </div>

                        <div class="form-group">
                            {{-- TODO: Completa el input para la imagen --}}
                            <label for="image">Imagen</label>
                            <input type="text" name="image" id="image" class="form-control" value="{{$id->image}}">
                        </div>

                        <div class="form-group">
                            {{-- TODO: Completa el input para el video --}}
                            <label for="video">Video</label>
                            <input type="text" name="video" id="video" class="form-control" value="{{$id->video}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" id="description" class="form-control" rows="3">{{$id->description}}</textarea>
                        </div>

                        <div class="form-group">
                            {{-- TODO: Completa el input para el launch --}}
                            <label for="launch">Fecha de lanzamiento</label>
                            <input type="text" name="launch" id="launch" class="form-control" value="{{$id->launch}}">
                        </div>

                        <div class="form-group">
                            {{-- TODO: Completa el input para el video --}}
                            <label for="creator">Compañia</label>
                            <input type="text" name="creator" id="creator" class="form-control" value="{{$id->creator}}">
                        </div>

                        <div class="form-group">
                            {{-- TODO: Completa el input para el video --}}
                            <label for="editor">Editora</label>
                            <input type="text" name="editor" id="editor" class="form-control" value="{{$id->editor}}">
                        </div>

                        <div class="form-group">
                            {{-- TODO: Completa el input para el video --}}
                            <label for="key">Clave</label>
                            <input type="text" name="key" id="key" class="form-control" value="{{$id->key}}">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 60px;margin-top:25px;">
                                Modificar juego
                            </button>
                        </div>

                        {{-- TODO: Cerrar formulario --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
</body>
</html>