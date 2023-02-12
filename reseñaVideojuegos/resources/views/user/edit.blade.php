@extends('layouts.app')
@section('content')
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">editar tu perfil</div>
                        <div class="card-body">
                        <form method = "POST" enctype="multipart/form-data" action="{{route('profile.update',['profile' => $user])}}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="nombre" class="col-md-4 col-form-label text-md-end">nombre:</label><br>
                                <div class="col-md-6">
                                    <input type="text" name="name" value="{{$user->name}}" require><br>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">email:</label><br>
                                <div class="col-md-6">  
                                    <input type="text"  name="email" value="{{$user->email}}" require><br>
                                </div> 
                            </div>
                            
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">contraseña:</label><br>
                                <div class="col-md-6">
                                    <input type="password" name="password" require><br>
                                </div>    
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">confirmacion de contraseña:</label><br>
                                <div class="col-md-6">
                                    <input type="password" name="password_confirmation" require><br>
                                </div>     
                            </div>

                            <div class="row mb-3">
                                <label for="imagen" class="col-md-4 col-form-label text-md-end">foto de perfil:</label><br>
                                <div class="col-md-6">
                                    <input type="file" accept = "image" name="imagen"><br>
                                </div>  
                            </div>
                            
                            <br>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-lg" value="editar usuario">Editar</button>
                                </div>  
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