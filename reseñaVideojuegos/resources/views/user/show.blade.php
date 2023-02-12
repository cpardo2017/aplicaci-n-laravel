@extends('layouts.app')
@section('content')
<div class="card w-50 mb-3 ml-3" style="width: 12rem;">
    <div class="card-body">
        <h2 class="card-title"><strong>{{$user->name}}</strong></h2>
        <h4 class="card-text">{{$user->email}}</h4>
        <h4 class="card-text">administrador desde: {{$user->isAdmin ? $user->admin_since : 'no es administrador'}}</h4>
    </div>
</div>
@endsection