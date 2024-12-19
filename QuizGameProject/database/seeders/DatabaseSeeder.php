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
        User::factory()->create([
            'name' => 'owner',
            'email' => 'owner@example.com',
            'password' => bcrypt('password'),
            'role' => 'owner',
        ]);
        $this->call(UserSeeder::class);
        $this->call(QuizSeeder::class);  
        $this->call(QuestionSeeder::class);
        $this->call(AnswerSeeder::class);
        // $this->call(LeaderboardSeeder::class); 

    }
}
