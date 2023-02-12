<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $filename = $this->faker->numberBetween(1,5) . '.jpg';

        return [
            'path' => "storage/img/videogames/{$filename}"
        ];
    }

    public function user(){
        $filename = $this->faker->numberBetween(1,6) . '.jpg';

        return $this->state([
            'path' => "storage/img/users/{$filename}"
        ]);
    }
}
