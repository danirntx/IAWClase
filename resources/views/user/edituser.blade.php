<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
@extends('layouts.master')
@section('content')
    Modificar usuario
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar Usuario
                </div>
                <div class="card-body" style="padding:30px">

                    {{-- TODO: Abrir el formulario e indicar el método POST --}}
                    <form action="#" method="post">
                        {{-- TODO: Protección contra CSRF --}}
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="form-group text-warning">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$usuario->name}}">
                        </div>

                        <div class="form-group text-warning">
                            <label for="price">Apellido</label>
                            <input type="text" name="subname" id="subname" class="form-control" value="{{$usuario->subname}}">
                        </div>

                        <div class="form-group text-warning">
                            <label for="category">Correo</label>
                            <input type="text" name="email" id="email" class="form-control" value="{{$usuario->email}}">
                        </div>

                        <div class="form-group text-warning">
                            <label for="image">Dirección</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{$usuario->address}}">
                        </div>

                     <div class="form-group text-warning">
                           <label for="video">Administrador</label>
                           <input type="text" name="admin" id="admin" class="form-control" value="{{$usuario->admin}}">
                     </div>
                     <div class="form-group text-warning">
                           <label for="name">Usuario</label>
                           <input type="text" name="user" id="user" class="form-control" value="{{$usuario->user}}">
                     </div>
                      <div class="form-group text-warning">
                           <label for="name">Contraseña</label>
                           <input type="password" name="password" id="password" class="form-control">
                     </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 60px;margin-top:25px;">
                                Modificar Usuario
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