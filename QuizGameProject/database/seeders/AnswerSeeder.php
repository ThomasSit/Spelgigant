<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    public function run()
    {
        Answer::create(['question_id' => 1, 'answer_text' => 'Amsterdam', 'is_correct' => true]);
        Answer::create(['question_id' => 1, 'answer_text' => 'Hoorn', 'is_correct' => false]);
        Answer::create(['question_id' => 1, 'answer_text' => 'Den Haag', 'is_correct' => false]);
        Answer::create(['question_id' => 1, 'answer_text' => 'Den Helder', 'is_correct' => false]);

        Answer::create(['question_id' => 2, 'answer_text' => 'Parijs', 'is_correct' => true]);
        Answer::create(['question_id' => 2, 'answer_text' => 'Lyon', 'is_correct' => false]);
        Answer::create(['question_id' => 2, 'answer_text' => 'Nice', 'is_correct' => false]);
        Answer::create(['question_id' => 2, 'answer_text' => 'Marseille', 'is_correct' => false]);

        Answer::create(['question_id' => 3, 'answer_text' => 'Berlijn', 'is_correct' => true]);
        Answer::create(['question_id' => 3, 'answer_text' => 'Hamburg', 'is_correct' => false]);
        Answer::create(['question_id' => 3, 'answer_text' => 'München', 'is_correct' => false]);
        Answer::create(['question_id' => 3, 'answer_text' => 'Keulen', 'is_correct' => false]);

        Answer::create(['question_id' => 4, 'answer_text' => 'Washington D.C.', 'is_correct' => true]);
        Answer::create(['question_id' => 4, 'answer_text' => 'New York', 'is_correct' => false]);
        Answer::create(['question_id' => 4, 'answer_text' => 'Los Angeles', 'is_correct' => false]);
        Answer::create(['question_id' => 4, 'answer_text' => 'Chicago', 'is_correct' => false]);

        Answer::create(['question_id' => 5, 'answer_text' => 'Londen', 'is_correct' => true]);
        Answer::create(['question_id' => 5, 'answer_text' => 'Birmingham', 'is_correct' => false]);
        Answer::create(['question_id' => 5, 'answer_text' => 'Manchester', 'is_correct' => false]);
        Answer::create(['question_id' => 5, 'answer_text' => 'Liverpool', 'is_correct' => false]);

        Answer::create(['question_id' => 6, 'answer_text' => 'Madrid', 'is_correct' => true]);
        Answer::create(['question_id' => 6, 'answer_text' => 'Birmingham', 'is_correct' => false]);
        Answer::create(['question_id' => 6, 'answer_text' => 'Manchester', 'is_correct' => false]);
        Answer::create(['question_id' => 6, 'answer_text' => 'Liverpool', 'is_correct' => false]);

        Answer::create(['question_id' => 7, 'answer_text' => 'Kopenhagen', 'is_correct' => true]);
        Answer::create(['question_id' => 7, 'answer_text' => 'Birmingham', 'is_correct' => false]);
        Answer::create(['question_id' => 7, 'answer_text' => 'Manchester', 'is_correct' => false]);
        Answer::create(['question_id' => 7, 'answer_text' => 'Liverpool', 'is_correct' => false]);

        Answer::create(['question_id' => 8, 'answer_text' => 'Brussel', 'is_correct' => true]);
        Answer::create(['question_id' => 8, 'answer_text' => 'Birmingham', 'is_correct' => false]);
        Answer::create(['question_id' => 8, 'answer_text' => 'Manchester', 'is_correct' => false]);
        Answer::create(['question_id' => 8, 'answer_text' => 'Liverpool', 'is_correct' => false]);

        Answer::create(['question_id' => 9, 'answer_text' => 'Peking', 'is_correct' => true]);
        Answer::create(['question_id' => 9, 'answer_text' => 'Birmingham', 'is_correct' => false]);
        Answer::create(['question_id' => 9, 'answer_text' => 'Manchester', 'is_correct' => false]);
        Answer::create(['question_id' => 9, 'answer_text' => 'Liverpool', 'is_correct' => false]);

        Answer::create(['question_id' => 10, 'answer_text' => 'Damascus', 'is_correct' => true]);
        Answer::create(['question_id' => 10, 'answer_text' => 'Birmingham', 'is_correct' => false]);
        Answer::create(['question_id' => 10, 'answer_text' => 'Manchester', 'is_correct' => false]);
        Answer::create(['question_id' => 10, 'answer_text' => 'Liverpool', 'is_correct' => false]);

        Answer::create(['question_id' => 11, 'answer_text' => 'Moskou', 'is_correct' => true]);
        Answer::create(['question_id' => 11, 'answer_text' => 'Birmingham', 'is_correct' => false]);
        Answer::create(['question_id' => 11, 'answer_text' => 'Manchester', 'is_correct' => false]);
        Answer::create(['question_id' => 11, 'answer_text' => 'Liverpool', 'is_correct' => false]);

        Answer::create(['question_id' => 12, 'answer_text' => 'Tokyo', 'is_correct' => true]);
        Answer::create(['question_id' => 12, 'answer_text' => 'Birmingham', 'is_correct' => false]);
        Answer::create(['question_id' => 12, 'answer_text' => 'Manchester', 'is_correct' => false]);
        Answer::create(['question_id' => 12, 'answer_text' => 'Liverpool', 'is_correct' => false]);

        Answer::create(['question_id' => 13, 'answer_text' => 'Australie', 'is_correct' => true]);
        Answer::create(['question_id' => 13, 'answer_text' => 'Birmingham', 'is_correct' => false]);
        Answer::create(['question_id' => 13, 'answer_text' => 'Manchester', 'is_correct' => false]);
        Answer::create(['question_id' => 13, 'answer_text' => 'Liverpool', 'is_correct' => false]);

        // Pokémon en Evoluties
        Answer::create(['question_id' => 14, 'answer_text' => 'Ivysaur', 'is_correct' => true]);
        Answer::create(['question_id' => 14, 'answer_text' => 'Charmander', 'is_correct' => false]);
        Answer::create(['question_id' => 14, 'answer_text' => 'Blastoise', 'is_correct' => false]);
        Answer::create(['question_id' => 14, 'answer_text' => 'Venusaur', 'is_correct' => false]);

        Answer::create(['question_id' => 15, 'answer_text' => 'Charmeleon', 'is_correct' => true]);
        Answer::create(['question_id' => 15, 'answer_text' => 'Charizard', 'is_correct' => false]);
        Answer::create(['question_id' => 15, 'answer_text' => 'Squirtle', 'is_correct' => false]);
        Answer::create(['question_id' => 15, 'answer_text' => 'Pidgey', 'is_correct' => false]);

        Answer::create(['question_id' => 16, 'answer_text' => 'Wartortle', 'is_correct' => true]);
        Answer::create(['question_id' => 16, 'answer_text' => 'Blastoise', 'is_correct' => false]);
        Answer::create(['question_id' => 16, 'answer_text' => 'Pikachu', 'is_correct' => false]);
        Answer::create(['question_id' => 16, 'answer_text' => 'Bulbasaur', 'is_correct' => false]);

        Answer::create(['question_id' => 17, 'answer_text' => 'Ivysaur', 'is_correct' => true]);
        Answer::create(['question_id' => 17, 'answer_text' => 'Charmander', 'is_correct' => false]);
        Answer::create(['question_id' => 17, 'answer_text' => 'Blastoise', 'is_correct' => false]);
        Answer::create(['question_id' => 17, 'answer_text' => 'Venusaur', 'is_correct' => false]);

        Answer::create(['question_id' => 18, 'answer_text' => 'Charmeleon', 'is_correct' => true]);
        Answer::create(['question_id' => 18, 'answer_text' => 'Charizard', 'is_correct' => false]);
        Answer::create(['question_id' => 18, 'answer_text' => 'Squirtle', 'is_correct' => false]);
        Answer::create(['question_id' => 18, 'answer_text' => 'Pidgey', 'is_correct' => false]);

        Answer::create(['question_id' => 19, 'answer_text' => 'Wartortle', 'is_correct' => true]);
        Answer::create(['question_id' => 19, 'answer_text' => 'Blastoise', 'is_correct' => false]);
        Answer::create(['question_id' => 19, 'answer_text' => 'Pikachu', 'is_correct' => false]);
        Answer::create(['question_id' => 19, 'answer_text' => 'Bulbasaur', 'is_correct' => false]);

        Answer::create(['question_id' => 20, 'answer_text' => 'Ivysaur', 'is_correct' => true]);
        Answer::create(['question_id' => 20, 'answer_text' => 'Charmander', 'is_correct' => false]);
        Answer::create(['question_id' => 20, 'answer_text' => 'Blastoise', 'is_correct' => false]);
        Answer::create(['question_id' => 20, 'answer_text' => 'Venusaur', 'is_correct' => false]);

        Answer::create(['question_id' => 21, 'answer_text' => 'Charmeleon', 'is_correct' => true]);
        Answer::create(['question_id' => 21, 'answer_text' => 'Charizard', 'is_correct' => false]);
        Answer::create(['question_id' => 21, 'answer_text' => 'Squirtle', 'is_correct' => false]);
        Answer::create(['question_id' => 21, 'answer_text' => 'Pidgey', 'is_correct' => false]);

        Answer::create(['question_id' => 22, 'answer_text' => 'Wartortle', 'is_correct' => true]);
        Answer::create(['question_id' => 22, 'answer_text' => 'Blastoise', 'is_correct' => false]);
        Answer::create(['question_id' => 22, 'answer_text' => 'Pikachu', 'is_correct' => false]);
        Answer::create(['question_id' => 22, 'answer_text' => 'Bulbasaur', 'is_correct' => false]);

        Answer::create(['question_id' => 23, 'answer_text' => 'Wartortle', 'is_correct' => true]);
        Answer::create(['question_id' => 23, 'answer_text' => 'Blastoise', 'is_correct' => false]);
        Answer::create(['question_id' => 23, 'answer_text' => 'Pikachu', 'is_correct' => false]);
        Answer::create(['question_id' => 23, 'answer_text' => 'Bulbasaur', 'is_correct' => false]);

        // Geschiedenis
        Answer::create(['question_id' => 24, 'answer_text' => 'George Washington', 'is_correct' => true]);
        Answer::create(['question_id' => 24, 'answer_text' => 'Abraham Lincoln', 'is_correct' => false]);
        Answer::create(['question_id' => 24, 'answer_text' => 'Thomas Jefferson', 'is_correct' => false]);
        Answer::create(['question_id' => 24, 'answer_text' => 'John Adams', 'is_correct' => false]);

        Answer::create(['question_id' => 25, 'answer_text' => '1989', 'is_correct' => true]);
        Answer::create(['question_id' => 25, 'answer_text' => '1990', 'is_correct' => false]);
        Answer::create(['question_id' => 25, 'answer_text' => '1988', 'is_correct' => false]);
        Answer::create(['question_id' => 25, 'answer_text' => '1991', 'is_correct' => false]);

        Answer::create(['question_id' => 26, 'answer_text' => 'Napoleon Bonaparte', 'is_correct' => true]);
        Answer::create(['question_id' => 26, 'answer_text' => 'Julius Caesar', 'is_correct' => false]);
        Answer::create(['question_id' => 26, 'answer_text' => 'Alexander de Grote', 'is_correct' => false]);
        Answer::create(['question_id' => 26, 'answer_text' => 'Louis XIV', 'is_correct' => false]);
    }
}
