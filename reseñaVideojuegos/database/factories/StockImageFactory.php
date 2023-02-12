<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StockImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $filename = $this->faker->numberBetween(1,18) . '.jpg';

        return [
            'path' => "storage/img/stockImages/{$filename}"
        ];
    }
}
