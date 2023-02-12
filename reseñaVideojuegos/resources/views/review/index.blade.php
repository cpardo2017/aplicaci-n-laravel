@extends('layouts.app')
@section('content')
<div class=" col-md-2 w-30 mb-3 ml-3">
    <ul class="nav nav-pills nav-stacked anyClass">
        <li>
            @foreach($user->reviews as $review)
                <div class="card w-30">
                    <div class="card-body">
                        <img class="card-img-left rounded-circle" width="50" height="60"src="{{asset($user->profileImage)}}">
                        <h4 class="card-title"><strong>{{$user->name}}</strong></h4>
                        <h4 class="card-text-left">{{$review->description}}</h4>
                        <h5 class="card-text">puntuacion: {{$review->score}}</h5>
                        <form method = "POST" action="{{route('users.reviews.destroy',['user' => $user, 'review' => $review])}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" value="borrar reseña" class="btn btn-primary">Borrar</button>
                        </form>
                        
                    </div>
                </div>       
            @endforeach
        </li>
    </ul>
</div>
@endsection