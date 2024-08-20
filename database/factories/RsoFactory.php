<?php

namespace Database\Factories;

use App\Models\DdHouse;
use App\Models\Rso;
use App\Models\User;
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
            'user_id' => fake()->unique()->numberBetween(1, 2900),
            'dd_house_id' => fake()->numberBetween(1, 3),
            'manager_id' => fake()->numberBetween(1, 3),
            'supervisor_id' => fake()->numberBetween(1, 3),
            'osrm_code' => fake()->unique()->postcode(),
            'employee_code' => fake()->unique()->postcode(),
            'rso_code' => fake()->unique()->postcode(),
            'corporate_number' => fake()->unique()->e164PhoneNumber(),
            'rso_number' => fake()->unique()->e164PhoneNumber(),
            'personal_number' => fake()->unique()->e164PhoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'name' => fake()->firstNameMale(),
            'father_name' => fake()->firstNameMale(),
            'mother_name' => fake()->firstNameFemale(),
            'bank_name' => fake()->userName(),
            'account_number' => fake()->unique()->creditCardNumber(),
            'market_type' => fake()->mimeType(),
            'salary' => fake()->numberBetween(7000, 10000),
            'nid' => fake()->unique()->numberBetween(4821100000000, 19804821100000000),
            'present_address' => fake()->address(),
            'permanent_address' => fake()->address(),
            'blood_group' => fake()->bloodGroup(),
            'name_of_degree' => fake()->realText(10),
            'institute' => fake()->userName(),
            'board' => fake()->userName(),
            'passing_year' => fake()->numberBetween(2000, 2020),
            'gpa' => fake()->numberBetween(2.10, 4.50),
            'subject' => fake()->userName(),
            'nationality' => 'Bangladeshi',
            'marital_status' => 'Unmarried',
            'religion' => fake()->userName(),
            'gender' => 'Male',
            'place_of_birth' => 'Unknown',
            'designation' => 'RS0',
            'signature' => fake()->imageUrl(),
            'dob' => fake()->date(),
            'joining_date' => fake()->date(),
        ];
    }
}
