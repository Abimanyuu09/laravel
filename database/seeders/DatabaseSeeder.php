<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([

            'name' => 'abimanyu',
            'username' => 'abim',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')

        ]);

        User::factory(3)->create();

        Product::factory(20)->create();
    }
}
