<?php 

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index($quizId)
    {
        $quiz = Quiz::with('questions')->findOrFail($quizId);
        return view('questions.index', compact('quiz'));
    }

    public function create($quizId)
    {
        $quiz = Quiz::findOrFail($quizId);
        return view('questions.create', compact('quiz'));
    }

    public function store(Request $request, $quizId)
    {
        $request->validate([
            'question_text' => 'required|string',
        ]);

        Question::create([
            'quiz_id' => $quizId,
            'question_text' => $request->input('question_text'),
        ]);

        return redirect()->route('questions.index', $quizId)->with('success', 'Vraag toegevoegd!');
    }

    public function edit($quizId, $questionId)
    {
        $quiz = Quiz::findOrFail($quizId);
        $question = $quiz->questions()->findOrFail($questionId);
    
        return view('questions.edit', compact('quiz', 'question'));
    }
    
    public function update(Request $request, $id, $questionId)
    {
        $request->validate([
            'question_text' => 'required|string',
        ]);

        $quiz = Quiz::findOrFail($id); 
        $question = $quiz->questions()->findOrFail($questionId); // Fetch the question within the quiz context
    
        $question->update([
            'question_text' => $request->input('question_text'),
        ]);
    
        return redirect()->route('questions.index', $id)->with('success', 'Vraag bijgewerkt!');
    }

    public function destroy($id, $questionId)
    {
        // $question = Question::findOrFail($id);
        // $quizId = $question->quiz_id;
        $quiz = Quiz::findOrFail($id);
        $question = $quiz->questions()->findOrFail($questionId);

        $question->delete();
        
        return redirect()->route('questions.index', $id)->with('success', 'Vraag verwijderd!');
    }
}
