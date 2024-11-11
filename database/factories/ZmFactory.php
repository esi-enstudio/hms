<?php

namespace Database\Factories;

use App\Models\Zm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Zm>
 */
class ZmFactory extends Factory
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
            'name' => fake()->name(),
            'number' => fake()->e164PhoneNumber,
            'designation' => fake()->randomElement(['zm','mdo']),
        ];
    }
}
