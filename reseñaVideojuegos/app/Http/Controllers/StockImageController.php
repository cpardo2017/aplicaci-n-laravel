<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StockImage;
use App\Http\Requests\StockImageRequest;

class StockImageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(StockImageRequest $request)
    {
        return view('home');
    }

    public function create()
    {
        return view('home');
    }

    public function destroy(StockImage $stockImage)
    {
        return view('home');
    }

    public function update(StockImageRequest $request, StockImage $stockImage)
    {
        return view('home');
    }

    public function show(StockImage $stockImage)
    {
        return view('home');
    }
    
    public function edit(StockImage $stockImage)
    {
        return view('home');
    }
}
