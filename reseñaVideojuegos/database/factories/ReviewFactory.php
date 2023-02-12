<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            'score' => $this->faker->numberBetween(1,5)
        ];
    }
}
