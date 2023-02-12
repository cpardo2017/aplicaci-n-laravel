<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Videogame;
use App\Models\StockImage;
use App\Models\Image;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(20)->create()->each(function($user){
            $image = Image::factory()->user()->make();
            $user->image()->save($image);
        });

        
        $videogames =Videogame::factory(50)->create()->each(function($videogame) use($users){
            $numberImages = rand(2,7);
            $numberReviews = rand(1,5);
            
            $stockImages = StockImage::factory($numberImages)->make();

            $reviews = Review::factory($numberReviews)->make()->each(function($review) use($users){
                $review->user_id = $users->random()->id;
                //print("hola1");
                //print("hola2");
            });
            
            $image = Image::factory()->make();
            $videogame->stockImages()->saveMany($stockImages);
            $videogame->reviews()->saveMany($reviews);
            $videogame->image()->save($image);
        });
    }
}
