<?php

namespace Database\Factories;

use App\Models\Supervisor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Supervisor>
 */
class SupervisorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 2900),
            'dd_house_id' => fake()->numberBetween(1, 3),
            'manager_id' => fake()->numberBetween(1, 3),
            'name' => fake()->name(),
            'father_name' => fake()->firstNameMale(),
            'mother_name' => fake()->firstNameFemale(),
            'dob' => fake()->date(),
            'nid' => fake()->unique()->numberBetween(4821100000000, 19804821100000000),
            'address' => fake()->address(),
            'phone_number' => fake()->unique()->phoneNumber(),
            'designation' => 'supervisor',
            'signature' => fake()->imageUrl(),
        ];
    }
}
