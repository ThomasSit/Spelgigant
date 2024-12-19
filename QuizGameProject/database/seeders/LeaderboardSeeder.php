<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LeaderBoardSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();

        // for ($i = 0; $i < 10; $i++) {
        DB::table('quiz_results')->insert([
            [
                'quiz_id' => 1,
                'user_id' => 1,
                'score' => 1,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 1,
                'user_id' => 2,
                'score' => 2,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 1,
                'user_id' => 3,
                'score' => 8,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 1,
                'user_id' => 4,
                'score' => 7,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 1,
                'user_id' => 5,
                'score' => 6,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 1,
                'user_id' => 6,
                'score' => 5,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 1,
                'user_id' => 7,
                'score' => 4,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 1,
                'user_id' => 8,
                'score' => 3,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 1,
                'user_id' => 9,
                'score' => 2,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 1,
                'user_id' => 10,
                'score' => 1,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'quiz_id' => 1,
                'user_id' => 11,
                'score' => 0,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'quiz_id' => 1,
                'user_id' => 11,
                'score' => 2,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //quiz 2

            [
                'quiz_id' => 2,
                'user_id' => 11,
                'score' => 0,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'quiz_id' => 2,
                'user_id' => 1,
                'score' => 1,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 2,
                'user_id' => 2,
                'score' => 1,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 2,
                'user_id' => 3,
                'score' => 2,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 2,
                'user_id' => 4,
                'score' => 2,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 2,
                'user_id' => 5,
                'score' => 3,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 2,
                'user_id' => 6,
                'score' => 4,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 2,
                'user_id' => 7,
                'score' => 5,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 2,
                'user_id' => 8,
                'score' => 6,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 2,
                'user_id' => 9,
                'score' => 7,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 2,
                'user_id' => 10,
                'score' => 8,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //quiz 3

            [
                'quiz_id' => 3,
                'user_id' => 11,
                'score' => 8,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'quiz_id' => 3,
                'user_id' => 1,
                'score' => 1,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 3,
                'user_id' => 2,
                'score' => 1,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 3,
                'user_id' => 3,
                'score' => 2,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 3,
                'user_id' => 4,
                'score' => 2,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 3,
                'user_id' => 5,
                'score' => 3,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 3,
                'user_id' => 6,
                'score' => 4,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 3,
                'user_id' => 7,
                'score' => 5,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 3,
                'user_id' => 8,
                'score' => 6,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 3,
                'user_id' => 9,
                'score' => 7,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 3,
                'user_id' => 10,
                'score' => 8,
                'started_at' => now(),
                'finished_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],



            // 'quiz_id' => $faker->numberBetween(1, 3),
            // 'user_id' => User::inRandomOrder()->first()->id,
            // 'score' => $faker->numberBetween(0, 100),
            // 'started_at' => $faker->dateTimeBetween('-1 year', 'now'),
            // 'finished_at' => $faker->dateTimeBetween('-1 year', 'now'), 
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ]);
        // }
    }
}
