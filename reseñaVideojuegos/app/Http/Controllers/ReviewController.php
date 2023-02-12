<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function store(ReviewRequest $request)
    {   
        
    }

    public function create()
    {
        //
    }

    public function destroy(Review $review)
    {
       
    }

    public function update(ReviewRequest $request, Review $review)
    {
        return view('home');
    }

    public function show(Review $review)
    {
        return view('home');
    }
    
    public function edit(Review $review)
    {
        return view('home');
    }
}
