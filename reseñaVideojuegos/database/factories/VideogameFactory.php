<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideogameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'fecha_lanzamiento' => $this->faker->date($format = 'd-m-Y', $max = 'now')
        ];
    }
}
