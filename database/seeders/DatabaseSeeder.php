<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\DdHouse;
use App\Models\Manager;
use App\Models\Retailer;
use App\Models\Rso;
use App\Models\Supervisor;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         DdHouse::factory(3)->create();
         Manager::factory(3)->create();
         Supervisor::factory(3)->create();
         Rso::factory(25)->create();
         Retailer::factory(2900)->create();

        Admin::create([
            'name' => 'Sadekin Islam',
            'email' => 'sadekin@enstudio.com',
            'phone_number' => '01732547755',
            'email_verified_at' => now(),
            'password' => Hash::make('32133213'),
        ]);
    }
}
