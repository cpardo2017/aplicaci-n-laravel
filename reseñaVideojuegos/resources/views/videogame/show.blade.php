@extends('layouts.app')
@section('content')
<body>
    <a href="{{route('videogames.reviews.create',['videogame' => $videogame->id])}}" class = "btn btn-primary mb-3 ml-3">crear reseña</a><br>
    <div id="carouselExampleIndicators" class="carousel slide w-50 mb-3 ml-3" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset($videogame->image->path)}}" alt="{{$videogame->image->path}}">
            </div>
            @foreach($videogame->stockImages as $imagenes)
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset($imagenes->path)}}" alt="{{$imagenes->path}}">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="card w-50 mb-3 ml-3">
        <div class="card-body">
            <h2 class="card-title"><strong>{{$videogame->nombre}}</strong></h2>
            <h4 class="card-text">fecha de lanzamiento: {{date('d-m-Y',strtotime($videogame->fecha_lanzamiento))}}</h4>
        </div>
    </div>

    <div class=" col-md-2 w-50 mb-3 ml-3">
        <ul class="nav nav-pills nav-stacked anyClass">
            <li>
                @foreach($videogame->reviews as $review)
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-left rounded-circle" width="50" height="60"src="{{asset($review->user->profileImage)}}">
                            <h4 class="card-title"><strong>{{$review->user->name}}</strong></h4>
                            <h4 class="card-text">{{$review->description}}</h4>
                            <h5 class="card-text">puntuacion: {{$review->score}}</h5>
                        </div>
                    </div>
                @endforeach
            </li>
        </ul>
    </div>

<body>
@endsection