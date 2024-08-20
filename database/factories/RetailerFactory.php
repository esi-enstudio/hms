<?php

namespace Database\Factories;

use App\Models\Retailer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Retailer>
 */
class RetailerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
//            'user_id' => fake()->unique()->numberBetween(1, 2900),
            'user_id' => User::factory(),
            'dd_house_id' => fake()->numberBetween(1, 3),
            'manager_id' => fake()->numberBetween(1, 3),
            'supervisor_id' => fake()->numberBetween(1, 3),
            'rso_id' => fake()->numberBetween(1, 25),
            'cluster_market' => fake()->userName(),
            'retailer_code' => fake()->unique()->creditCardNumber(),
            'retailer_name' => fake()->firstNameMale(),
            'retailer_type' => fake()->colorName(),
            'enabled' => 'Y',
            'sim_seller' => fake()->randomElement(['Y','N']),
            'itop_number' => fake()->unique()->e164PhoneNumber(),
            'service_point' => fake()->userName(),
            'category' => fake()->userName(),
            'owner_name' => fake()->userName(),
            'contact_number' => fake()->unique()->e164PhoneNumber(),
            'thana' => fake()->userName(),
            'district' => fake()->userName(),
            'address' => fake()->streetAddress(),
            'dob' => fake()->date(),
            'nid' => fake()->unique()->numberBetween(4821100000000, 19804821100000000),
            'trade_license' => fake()->unique()->creditCardNumber(),
            'tin_number' => fake()->unique()->creditCardNumber(),
            'bts_code' => fake()->numberBetween(111111,999999),
            'route' => fake()->userName(),
        ];
    }
}
