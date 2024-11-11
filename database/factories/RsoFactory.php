<?php

namespace Database\Factories;

use App\Models\Rso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Rso>
 */
class RsoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dd_house_id' => fake()->numberBetween(1, 3),
            'user_id' => fake()->numberBetween(1, 300),
            'zm_id' => fake()->numberBetween(1, 3),
            'manager_id' => fake()->numberBetween(1, 3),
            'supervisor_id' => fake()->numberBetween(1, 3),
            'name' => fake()->name(),
            'number' => fake()->e164PhoneNumber,
        ];
    }
}
