<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    } 

    public function edit(Request $request){
        return view('user.edit')->with(['user' => $request->user()]);
    }

    public function update(ProfileRequest $request){
        

        DB::transaction(function() use($request){

            $user = $request->user();

            $user->fill(array_filter($request->validated()));

            if($user->isDirty('email')){
                $user->email_verified_at = null;
                $user->sendEmailVerificationNotification();
            }

            $user->save();

            if($request->hasFile('imagen')){
                if($user->image != null){
                    $imagen = $user->image;
                    File::delete(storage_path('app/public'.$imagen->path));
                    $imagen->delete();
                }

                $path = 'storage/img/'.$request->imagen->store('users','public');

                $user->image()->create(['path' => $path]);
            }

        });

        return redirect()->route('home')->withSuccess('usuario editado');
    }
}
