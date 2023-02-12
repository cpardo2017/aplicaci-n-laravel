<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Videogame;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;

class VideogameReviewController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function index(Videogame $videogame)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function create(Videogame $videogame)
    {
        return view('review.create')->with(['videogame' => $videogame]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request, Videogame $videogame)
    {
        DB::transaction(function() use($request){
            $requestValidated = $request->validated();

            $videogame->reviews()->create([
                'description' => $requestValidated['description'],
                'score' => $requestValidated['score'],
                'user_id' => auth()->user()->id
            ]);
        });

        return redirect()->route('videogames.show',['videogame' => $videogame->id])->withSuccess("se registro la reseña");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Videogame  $videogame
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Videogame $videogame, Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Videogame  $videogame
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Videogame $videogame, Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Videogame  $videogame
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videogame $videogame, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Videogame  $videogame
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videogame $videogame, Review $review)
    {
        //
    }
}
