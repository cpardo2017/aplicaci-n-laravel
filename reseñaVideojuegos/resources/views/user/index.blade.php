@extends('layouts.app')
@section('content')
<body>
    <br>
    <div class="table ml-2">
        <table class = "table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope = "col">#</th>
                    <th scope = "col">nombre</th>
                    <th scope = "col">mail</th>
                    <th scope = "col">administrador</th>
                    <th scope = "col">ver</th>
                    <th scope = "col">cambiar estado</th>
                </tr>
            <thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope = "col">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->isAdmin ? 'SI' : 'NO'}}</td>
                        <td><a href="{{route('users.show',['user' => $user->id])}}">ver</a></td>
                        <td> 
                            <form method = "POST" action="{{route('users.changeAdmin',['user' => $user->id])}}">
                                @csrf
                                <button type="submit" value="cambiar estado" class="btn btn-primary">{{$user->isAdmin ? 'quitar' : 'hacer'}}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</body>
@endsection