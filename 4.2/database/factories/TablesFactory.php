<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tables>
 */
class TablesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numberOfSeats' => fake()->numberBetween(1,6),
            'state' => 0,
            'bill' => 0,
            'user_id' => fake()->numberBetween(1,5)
        ];
    }
}
