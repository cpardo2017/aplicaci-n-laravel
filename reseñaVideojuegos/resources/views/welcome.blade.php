@extends('layouts.app')
@section('content')
    <div class="row">
        @foreach($videogames as $videogame)
        <div class="card mx-auto mb-5" style="width: 30rem;">
            <img class="card-img-top" src="{{asset($videogame->image->path)}}" alt="{{$videogame->image->path}}">
            <div class="card-body">
                <h5 class="card-title">{{$videogame->nombre}}</h5>
                <p class="card-text">{{date('d-m-Y', strtotime($videogame->fecha_lanzamiento))}}</p>
                <a href="{{route('videogames.show',['videogame' => $videogame->id])}}" class="btn btn-primary">ver</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection