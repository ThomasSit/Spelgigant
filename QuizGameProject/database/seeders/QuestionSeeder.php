<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        $quizId1 = 1; // ID van 'Landen en Hoofdsteden'
        Question::create(['quiz_id' => $quizId1, 'question_text' => 'Wat is de hoofdstad van Nederland?']);
        Question::create(['quiz_id' => $quizId1, 'question_text' => 'Wat is de hoofdstad van Frankrijk?']);
        Question::create(['quiz_id' => $quizId1, 'question_text' => 'Wat is de hoofdstad van Duitsland?']);
        Question::create(['quiz_id' => $quizId1, 'question_text' => 'Wat is de hoofdstad van Verenigde Staten?']);
        Question::create(['quiz_id' => $quizId1, 'question_text' => 'Wat is de hoofdstad van Verenigd Koninkrijk?']);
        Question::create(['quiz_id' => $quizId1, 'question_text' => 'Wat is de hoofdstad van Spanje?']);
        Question::create(['quiz_id' => $quizId1, 'question_text' => 'Wat is de hoofdstad van Denemarken?']);
        Question::create(['quiz_id' => $quizId1, 'question_text' => 'Wat is de hoofdstad van België?']);
        Question::create(['quiz_id' => $quizId1, 'question_text' => 'Wat is de hoofdstad van China?']);
        Question::create(['quiz_id' => $quizId1, 'question_text' => 'Wat is de hoofdstad van Syrië?']);
        Question::create(['quiz_id' => $quizId1, 'question_text' => 'Wat is de hoofdstad van Rusland?']);
        Question::create(['quiz_id' => $quizId1, 'question_text' => 'Wat is de hoofdstad van Japan?']);
        Question::create(['quiz_id' => $quizId1, 'question_text' => 'Wat is de hoofdstad van Australië?']);

        
        // Pokemon en Evoluties
        $quizId2 = 2; // ID van 'Pokemon en Evoluties'
        Question::create(['quiz_id' => $quizId2, 'question_text' => 'Wat is de evolutie van Bulbasaur?']);
        Question::create(['quiz_id' => $quizId2, 'question_text' => 'Wat is de evolutie van Charmander?']);
        Question::create(['quiz_id' => $quizId2, 'question_text' => 'Wat is de evolutie van Squirtle?']);
        Question::create(['quiz_id' => $quizId2, 'question_text' => 'Wat is de evolutie van Eevee (water)?']);
        Question::create(['quiz_id' => $quizId2, 'question_text' => 'Wat is de evolutie van Eevee (vuur)?']);
        Question::create(['quiz_id' => $quizId2, 'question_text' => 'Wat is de evolutie van Eevee (elektrisch)?']);
        Question::create(['quiz_id' => $quizId2, 'question_text' => 'Wat is de evolutie van Pikachu?']);
        Question::create(['quiz_id' => $quizId2, 'question_text' => 'Wat is de pre-evolutie van Jigglypuff?']);
        Question::create(['quiz_id' => $quizId2, 'question_text' => 'Wat is de evolutie van Magikarp?']);
        Question::create(['quiz_id' => $quizId2, 'question_text' => 'Wat is de evolutie van Pidgey?']);

        // Geschiedenis
        $quizId3 = 3; // ID van 'Geschiedenis'
        Question::create(['quiz_id' => $quizId3, 'question_text' => 'Wie was de eerste president van de VS?']);
        Question::create(['quiz_id' => $quizId3, 'question_text' => 'In welk jaar viel de Berlijnse Muur?']);
        Question::create(['quiz_id' => $quizId3, 'question_text' => 'Wie was de keizer van Frankrijk in 1804?']);
        Question::create(['quiz_id' => $quizId3, 'question_text' => 'In welk jaar begon de Tweede Wereldoorlog?']);
        Question::create(['quiz_id' => $quizId3, 'question_text' => 'Wie ontdekte Amerika in 1492?']);
        Question::create(['quiz_id' => $quizId3, 'question_text' => 'Wat was de naam van het oude Egypte?']);
        Question::create(['quiz_id' => $quizId3, 'question_text' => 'Wie schreef “De Republiek”?']);
        Question::create(['quiz_id' => $quizId3, 'question_text' => 'Wat was de hoofdstad van het Romeinse Rijk?']);
        Question::create(['quiz_id' => $quizId3, 'question_text' => 'Wat was de eerste man op de maan?']);
        Question::create(['quiz_id' => $quizId3, 'question_text' => 'Wie was de eerste vrouwelijke premier van het VK?']);
    }
}
