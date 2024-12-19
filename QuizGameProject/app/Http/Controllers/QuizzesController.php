<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizzesController extends Controller
{

    public function index()
    {
        $quizzes = Quiz::all();
        return view('dashboard.quizmanagement', compact('quizzes'));
    }

    public function create()
    {
        return view('quiz.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]); 

        $quiz = Quiz::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

      return redirect()->route('quiz.show', $quiz->id);
    }

    public function show(string $id)
    {
        $quiz = Quiz::with('questions.answers')->findOrFail($id);
        return view('quiz.show', compact('quiz'));
    }

    public function edit(string $id)
    {
        $quiz = quiz::findOrFail($id); // id ophalen anders error
        return view('quiz.edit', compact('quiz'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $quiz = Quiz::findOrFail($id);
        $quiz->title = $request->input('title');
        $quiz->description = $request->input('description');
        $quiz->save();

      return redirect()->route('quizmanagement', $quiz->id);

    }

    public function destroy(string $id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz -> delete();

      return redirect()->route('quizmanagement', $quiz->id);
    }

    public function addQuestion($request, string $quizid) 
    {
        $request->validate([
            'question_text' => 'required|string|max:255',
        ]);

        $quiz = Quiz::findOrFail($quizid);

        $question = $quiz -> questions()->create([
            'question_text' => $request->input('question_text'),
        ]);

        return redirect()->route('quizmanagement', $quiz->id);

    }

    public function createQuestion(string $quizid)
    {
        $quiz = Quiz::findOrFail($quizid);
        return view('quiz.addquestion', compact('quiz'));
    }
}
