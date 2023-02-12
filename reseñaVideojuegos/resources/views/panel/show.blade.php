@extends('layouts.app')
@section('content')
    <div class="container">
    <h2>Panel del Control</h2>
    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{route('videogames.index')}}">videojuegos</a>
        </div>
        <div class="panel-body">
            <a href="{{route('users.index')}}">usuarios</a>
        </div>
    </div>
    </div>
@endsection