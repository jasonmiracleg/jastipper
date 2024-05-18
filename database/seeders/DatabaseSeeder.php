<?php

namespace Database\Seeders;

use App\Models\JastiperProduct;
use App\Models\Product;
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
            'name' => 'Jane',
            'phone_number' => '081322221000',
            'rank' => 10,
            'location' => 'Jakarta',
            'email' => 'jane@gmail.com',
            'password' => bcrypt('12345678'),
            'is_jastipper' => '1',
            'is_login' => '0',
            'is_active' => '1',
        ]);

        Product::create([
            'product_name' => 'AA Face Mist',
            'price' => '75000',
            'description' => 'A face mist is a skincare product that comes in a spray bottle and is designed to hydrate, refresh, and rejuvenate the skin.',
            'picture' => 'aaFaceMist.png'
        ]);

        Product::create([
            'product_name' => 'Beauty Food',
            'price' => '65000',
            'description' => 'These foods are often rich in vitamins, minerals, antioxidants, and other nutrients that support skin health and combat the effects of aging.',
            'picture' => 'beautyFood.png'
        ]);

        Product::create([
            'product_name' => 'Lemon Oil',
            'price' => '105000',
            'description' => 'In skincare, lemon oil is often used for its astringent and detoxifying properties. It is believed to help clarify and brighten the skin, as well as reduce excess oil.',
            'picture' => 'lemonOil.png'
        ]);

        Product::create([
            'product_name' => 'Sukin Face Wash',
            'price' => '85000',
            'description' => 'Sukin is an Australian brand that focuses on creating skincare products with natural ingredients and without harsh chemicals.',
            'picture' => 'sukinFaceWash.png'
        ]);

        JastiperProduct::create([
            'jastiper_id' => 2,
            'product_id' => 1
        ]);

        JastiperProduct::create([
            'jastiper_id' => 2,
            'product_id' => 2
        ]);

        JastiperProduct::create([
            'jastiper_id' => 2,
            'product_id' => 3
        ]);

        JastiperProduct::create([
            'jastiper_id' => 2,
            'product_id' => 4
        ]);
    }
}
