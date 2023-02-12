<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Http\Requests\ImageRequest;

class ImageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(ImageRequest $request)
    {
        return view('home');
    }

    public function create()
    {
        return view('home');
    }

    public function destroy(Image $image)
    {
        return view('home');
    }

    public function update(ImageRequest $request, Image $image)
    {
        return view('home');
    }

    public function show(Image $image)
    {
        return view('home');
    }
    
    public function edit(Image $image)
    {
        return view('home');
    }
}
