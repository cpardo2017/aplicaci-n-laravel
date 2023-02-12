@extends('layouts.app')
@section('content')
<body>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">crear reseña</div>
                <div class="card-body">
                    <form method = "POST" action="{{route('videogames.reviews.store',['videogame' => $videogame->id])}}">
                        @csrf
                        <div class="form-row px-2">
                            <label for="description">descripcion:</label><br>
                            <textarea class="form-control" name="description" rows="3" value = {{old('description')}}></textarea><br>
                        </div>
                        
                        <div class="form-row px-2">
                            <label for="score">puntuacion:</label><br>
                            <select name="score">
                                <option value="1" {{old('score') == '1' ? required : ''}}>1</option>
                                <option value="2" {{old('score') == '2' ? required : ''}}>2</option>
                                <option value="3" {{old('score') == '3' ? required : ''}}>3</option>
                                <option value="4" {{old('score') == '4' ? required : ''}}>4</option>
                                <option value="5" {{old('score') == '5' ? required : ''}}>5</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-row px-2">
                            <button type="submit" value="crear reseña" class="btn btn-primary">Crear</button>
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