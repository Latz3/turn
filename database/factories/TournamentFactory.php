<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'size' => 30,
            'location' => 'Würzburg',
            'date' => '2022-11-05 08:00:00',
        ];
    }
}
