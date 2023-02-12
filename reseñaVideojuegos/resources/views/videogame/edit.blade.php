@extends('layouts.app')
@section('content')
<body>
    <div class="container">
        <div class="justify-content-center">
            <div class="cold-md-8">
                <div class="card">
                    <div class="card-header">editar videojuego</div>
                </div>
                <div class="card-body">
                    <form method = "POST" enctype="multipart/form-data" action="{{route('videogames.update',['videogame' => $videogame->id])}}">
                        @csrf
                        @method('PUT')
                        <div class="form-row px-2">
                            <label for="nombre">nombre:</label><br>
                            <input type="text" name="nombre" value="{{$videogame->nombre}}" require><br>
                        </div>
                        
                        <div class="form-row px-2">
                            <label for="fecha_lanzamiento">fecha de lanzamiento:</label><br>
                            <input type="date"  name="fecha_lanzamiento" value="{{$videogame->fecha_lanzamiento}}" require><br>
                        </div>
                        
                        <div class="form-row px-2">
                            <label for="portada">portada:</label><br>
                            <input type="file" accept = "image" name="imagen_portada" ><br>
                        </div>
                        
                        <div class="form-row px-2">
                            <label for="imagenes">imagenes de stock:</label><br>
                            <input type="file" accept = "image/*" name="imagenes[]" multiple><br>
                        </div>
                        
                        <br>
                        <div class="form-row mt-3">
                            <button type="submit" class="btn btn-primary btn-lg" value="crear videojuego">Editar</button>
                        </div>
                        
                    </form> 
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
@endsection