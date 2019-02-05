<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
@extends('layouts.master')
@section('content')
</br>
    Listado de Juegos
</br></br>
    <div class="row">
        @foreach( $arrayJuegos as $key => $juegos )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <a href="{{ url('/catalog/show/' . $juegos->id ) }}">
                    <img src="{{$juegos->image}}" style="height:200px"/>
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$juegos->name}}
                    </h4>
                </a>
            </div>
        @endforeach
    </div>
@stop
</body>
</html>