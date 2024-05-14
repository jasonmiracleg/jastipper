<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Noah',
            'phone_number' => '081355552220',
            'rank' => 2,
            'location' => 'Jakarta',
            'email' => 'noah@gmail.com',
            'password' => bcrypt('12345678'),
            'is_jastipper' => '0',
            'is_login' => '0',
            'is_active' => '1',
        ]);

        User::create([
            'name' => 'Josh',
            'phone_number' => '081322221000',
            'rank' => 10,
            'location' => 'Jakarta',
            'email' => 'josh@gmail.com',
            'password' => bcrypt('12345678'),
            'is_jastipper' => '1',
            'is_login' => '0',
            'is_active' => '1',
        ]);
    }
}
