@extends('layouts.app')
@section('content')
<body>
    <div class="button">
        <a type="button" class="btn btn-primary ml-2" href="{{route('videogames.create')}}">ingresar videojuego</a>
    </div>
    <br>
    <div class="table ml-2">
        <table class = "table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope = "col">#</th>
                    <th scope = "col">nombre</th>
                    <th scope = "col">fecha de lanzamiento</th>
                    <th scope = "col">ver</th>
                    <th scope = "col">modificar</th>
                    <th scope = "col">borrar</th>
                </tr>
            <thead>
            <tbody>
                @foreach ($videogames as $videogame)
                    <tr>
                        <th scope = "col">{{$videogame->id}}</td>
                        <td>{{$videogame->nombre}}</td>
                        <td>{{date('d-m-Y', strtotime($videogame->fecha_lanzamiento))}}</td>
                        <td><a href="{{route('videogames.show', ['videogame' => $videogame->id])}}">ver</a></td>
                        <td><a href="{{route('videogames.edit', ['videogame' => $videogame->id])}}">modificar</a></td>
                        <td>
                            <form method = "POST" action="{{route('videogames.destroy', ['videogame' => $videogame->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" value="borrar videojuego" class="btn btn-primary">Borrar</button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</body>
@endsection