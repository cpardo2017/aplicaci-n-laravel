<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;
use App\Models\Image;
use App\Http\Requests\VideogameRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class VideogameController extends Controller
{

    public function __construct(){
        $this->middleware('isAdmin')->except('show');
    }

    public function index()
    {   
        return view('videogame.index')->with(['videogames' =>  Videogame::all()]);
    }

    public function store(VideogameRequest $request)
    {  
        DB::transaction(function() use($request){
            $videogame = Videogame::create($request->validated());

            $videogame->image()->create(['path' => 'img/'. $request->imagen_portada->store('videogames','public')]);

            foreach ($request->imagenes as $imagen) {
                $videogame->stockImages()->create(['path' => 'img/'. $imagen->store('stockImages','public')]);
            }
        });
        
        return redirect()->route('videogame.index')->withsuccess('se registro el videojuego');
    }

    public function create()
    {
        return view('videogame.create');
    }

    public function destroy(Videogame $videogame)
    {   
        $videogame->delete();
        return redirect()->route('videogames.index')->withSuccess('se borro el videojuego');
    }

    public function update(VideogameRequest $request, Videogame $videogame)
    {  

        DB::transaction(function() use($request){
            $videogame->update($request->validated());

            if($request->hashFile('imagen_portada')){
                $path = storage_path('app/public'.$request->imagen_portada->path);

                File::delete($path);

                $videogame->image->delete();

                $videogame->image()->create(['path' => 'storage/img/'.$request->imagen_portada.store('videogames','public')]);
            }

            if($request->hashFile('imagenes')){
                foreach($videogame->stockImages as $imagen){
                    $path = storage_path('app/public'.$imagen->path);

                    File::delete($path);

                    $imagen->delete();
                }

                foreach($request->imagenes as $imagen){
                    $videogame->stockImages()->create(['path' => 'storage/img/'.$imagen->store('stockImages','public')]);
                }
            }
        });

        return redirect()->route('videogame.index')->withsuccess('se edito el videojuego');
    }

    public function show(Videogame $videogame)
    {   
        return view('videogame.show')->with([
            'videogame' => $videogame
        ]);
    }
    
    public function edit(Videogame $videogame)
    {
        return view('videogame.edit')->with(['videogame' => $videogame]);
    }
}
