<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $number = 1;

        return [
            'number' => $number++,
            'tournament_id' => 1,
            'size' => 6,
            'start_time' => '2022-11-05 09:30:00'
        ];
    }
}
