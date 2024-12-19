<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\quizResults;


class QuizGameController extends Controller
{

    public function index()
    {
        $quizzes = Quiz::all();
        return view('Quizgame.index', compact('quizzes'));
    }

    public function start($quizId)
    {
        $quiz = Quiz::findOrFail($quizId);

        // Maximaal 10 willekeurige vragen 
        $randomQuestions = $quiz->questions()->inRandomOrder()->limit(10)->get();

        if ($randomQuestions->isEmpty()) {
            return redirect()->route('QuizGame')->with('error', 'The quiz "' . $quiz->title . '" has less than 10 questions.');
        } else if ($randomQuestions->count() < 10) {
            return redirect()->route('QuizGame')->with('error', 'The quiz "' . $quiz->title . '" has less than 10 questions.');
        }

        // Bewaar de meerkeuze vragen 
        session()->put('random_questions', $randomQuestions);

        // Zorgt ervoor begin bij de eerste vraag
        session()->put('current_question_index', -1);

        // eerdere antwoorden van gebruiker worden gewist
        session()->forget('user_answers');

        if (Auth::check()) {
            $userId = Auth::user()->id; 

            session()->put('started_at', now());
        }

        // Haal de eerste vraag uit de lijst 
        $firstQuestion = $randomQuestions->first();
        return view('quizgame.start', compact('quiz', 'firstQuestion'));
    }

    public function next(Request $request, $quizId)
    {
        $quiz = Quiz::findOrFail($quizId);

        // Haal de willekeurige vragen en de huidige index uit de sessie
        $randomQuestions = session()->get('random_questions', []);
        $currentQuestionIndex = session()->get('current_question_index', -1);

        // Verwerk het antwoord van de gebruiker
        $answerId = $request->input('answer_id'); // Haal het ID van het gegeven antwoord op
        $userAnswers = session()->get('user_answers', []); // Antwoorden opslaan in een array

        // Sla het antwoord van de gebruiker op voor de huidige vraag
        if (isset($randomQuestions[$currentQuestionIndex])) {
            $currentQuestionId = $randomQuestions[$currentQuestionIndex]->id;
            $userAnswers[$currentQuestionId] = $answerId;
        }

        // Bewaar de geüpdate antwoorden in de sessie
        session()->put('user_answers', $userAnswers);

        // Controleer of er nog meer vragen zijn
        if ($currentQuestionIndex + 1 >= count($randomQuestions)) {
            return redirect()->route('quiz.results', ['quizId' => $quizId]);
        }

        $currentQuestionIndex++;

        session()->put('current_question_index', $currentQuestionIndex);

        // Haal de volgende vraag op
        $nextQuestion = $randomQuestions[$currentQuestionIndex];

        return view('QuizGame.question', compact('nextQuestion', 'currentQuestionIndex', 'quiz'));
    }

    public function results($quizId, Request $request)
    {
        $quiz = Quiz::findOrFail($quizId);

        $randomQuestions = session()->get('random_questions', []);
        $userAnswers = session()->get('user_answers', []);
        $correctAnswers = 0;

        foreach ($randomQuestions as $question) {
            $correctAnswer = $question->answers->firstWhere('is_correct', true);
            if (isset($userAnswers[$question->id]) && $userAnswers[$question->id] == $correctAnswer->id) {
                $correctAnswers++;
            }
        }

        $score = $correctAnswers;

        if (Auth::check()) {
            $started_at = session()->get('started_at');
            $finished_at = now();

            QuizResults::create([
                'quiz_id' => $quizId,
                'user_id' => Auth::id(),
                'score' => $score,
                'started_at' => $started_at,
                'finished_at' => $finished_at,
                'updated_at' => $finished_at,  
            ]);
        }

        return view('QuizGame.results', [
            'quiz' => $quiz,
            'correctAnswers' => $correctAnswers,
            'totalQuestions' => count($randomQuestions),
        ]);
    }

    public function Leaderboard()
    {
        $quizzes = Quiz::all();

        // Maak een array om leaderboards per quiz op te slaan  
        $leaderboards = [];

        foreach ($quizzes as $quiz) {
            $quizResults = quizResults::join('users', 'quiz_results.user_id', '=', 'users.id')
                ->where('quiz_results.quiz_id', $quiz->id)
                ->where('users.role', 'user')
                ->orderBy('quiz_results.score', 'desc')
                ->take(10   )
                ->get(['quiz_results.*']);

            // Voeg de quiz en de resultaten toe aan het leaderboard
            $leaderboards[] = [
                'quiz' => $quiz,
                'results' => $quizResults,
            ];
        }
        return view('QuizGame.leaderboard', compact('leaderboards'));
    }
}
