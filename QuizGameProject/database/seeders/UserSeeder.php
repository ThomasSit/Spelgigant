<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // creeer random users
        User::factory(10)->create();

        User::create([
            'name' => 'user',
            'password' => bcrypt('password'),
            'role' => 'user',
            'email' => 'test@example.com',
        ]);
    }
}

