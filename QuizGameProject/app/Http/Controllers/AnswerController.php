<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index($quizId, $questionId)
    {
        $answers = Answer::where('question_id', $questionId)->get();
        $question = Question::findOrFail($questionId);

        return view('answers.index', compact('answers', 'quizId', 'questionId', 'question'));
    }

    public function create($quizId, $questionId)
    {
        return view('answers.create', compact('quizId', 'questionId'));
    }

    public function store(Request $request, $quizId, $questionId)
    {
        $request->validate([
            'answer_text' => 'required|string',
            'is_correct' => 'required|boolean',
        ]);

        Answer::create([
            'question_id' => $questionId,
            'answer_text' => $request->answer_text,
            'is_correct' => $request->is_correct,
        ]);

        return redirect()->route('answers.index', ['quiz' => $quizId, 'question' => $questionId])
                         ->with('success', 'Antwoord toegevoegd.');
    }

    public function edit($quizId, $questionId, $answerId)
    {
        $answer = Answer::findOrFail($answerId);
        return view('answers.edit', compact('answer', 'quizId', 'questionId'));
    }

    public function update(Request $request, $quizId, $questionId, $answerId)
    {
        $request->validate([
            'answer_text' => 'required|string',
            'is_correct' => 'required|boolean',
        ]);

        $answer = Answer::findOrFail($answerId);
        $answer->update([
            'answer_text' => $request->answer_text,
            'is_correct' => $request->is_correct,
        ]);

        return redirect()->route('answers.index', ['quiz' => $quizId, 'question' => $questionId])
                         ->with('success', 'Antwoord bijgewerkt.');
    }

    public function destroy($quizId, $questionId, $answerId)
    {
        $answer = Answer::findOrFail($answerId);
        $answer->delete();

        return redirect()->route('answers.index', ['quiz' => $quizId, 'question' => $questionId])
                         ->with('success', 'Antwoord verwijderd.');
    }
}
