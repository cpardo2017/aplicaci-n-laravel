<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function __construct(){
        $this->middleware('isAdmin');
    }

    public function index(){
        return view('user.index')->with(['users' => User::all()]);
    }

    public function show(User $user){;
        return view('user.show')->with(['user' => $user]);
    }

    public function changeAdmin(User $user){
        if($user->isAdmin){
            $user->admin_since = null;
        }else{
            $user->admin_since = now();
        }

        $user->save();

        return redirect()->route('users.index')->withSuccess('estado cambiado correctamente');
    }
}
