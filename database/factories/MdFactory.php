<?php

namespace Database\Factories;

use App\Models\Md;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Md>
 */
class MdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 300),
            'name' => fake()->name(),
            'number' => fake()->e164PhoneNumber,
        ];
    }
}
