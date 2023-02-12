@extends('layouts.app')
@section('content')
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">crear videojuego</div>
                    <div class="card-body">
                        <form method = "POST" enctype="multipart/form-data" action="{{route('videogames.store')}}">
                            @csrf
                            <div class="form-row px-2">
                                <label for="nombre">nombre:</label><br>
                                <input type="text" name="nombre" value="{{old('nombre')}}" require><br>
                            </div>
                            
                            <div class="form-row px-2">
                                <label for="fecha_lanzamiento">fecha de lanzamiento:</label><br>
                                <input type="date"  name="fecha_lanzamiento" value="{{old('fecha_lanzamiento')}}" require><br>
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
                            <div class="form-row px-2">
                                <button type="submit" value="crear videojuego" class="btn btn-primary">Crear</button>
                            </div>
                            
                        </form> 
                    </div>  
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
@endsection