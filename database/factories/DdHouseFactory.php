<?php

namespace Database\Factories;

use App\Models\DdHouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DdHouse>
 */
class DdHouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cluster' => fake()->userName(),
            'region' => fake()->userName(),
            'code' => fake()->numberBetween(111111,999999),
            'name' => fake()->userName(),
            'thana' => fake()->userName(),
            'district' => fake()->userName(),
            'address' => fake()->address(),
            'lat' => fake()->latitude(),
            'long' => fake()->longitude(),
            'bts_code' => fake()->numberBetween(111111,999999),
        ];
    }
}




