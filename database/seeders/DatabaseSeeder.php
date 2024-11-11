<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Bp;
use App\Models\DdHouse;
use App\Models\DmsOperator;
use App\Models\Manager;
use App\Models\Md;
use App\Models\Retailer;
use App\Models\Rso;
use App\Models\Supervisor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Zm;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(292)->create();
         DdHouse::factory(3)->create();
         Md::factory(1)->create();
         Zm::factory(3)->create();
         Manager::factory(3)->create();
         Supervisor::factory(3)->create();
         Rso::factory(25)->create();
         Bp::factory(3)->create();
         Account::factory(1)->create();
         DmsOperator::factory(3)->create();
         Retailer::factory(250)->create();


//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
