<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder

{
    public function run()
    {
        DB::table('quizzes')->insert([
            [
                'title' => 'Landen en Hoofdsteden',
                'description' => 'Een quiz over landen en hun hoofdsteden.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pokémon en Evoluties',
                'description' => 'Een quiz over Pokémon en hun evoluties.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Geschiedenis',
                'description' => 'Een quiz over belangrijke historische gebeurtenissen.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

