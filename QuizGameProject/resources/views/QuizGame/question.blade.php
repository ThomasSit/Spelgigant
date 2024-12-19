@extends('layouts.app')

@section('content')

<section class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-lg">
    <h2>Vraag {{ $currentQuestionIndex + 1 }} van {{ count(session('random_questions')) }}</h2>
    <p>{{ $nextQuestion->question_text }}</p>

    <form method="POST" action="{{ route('quiz.next', $quiz->id) }}">
        @csrf
        <input type="hidden" name="current_question_index" value="{{ $currentQuestionIndex }}">
        <div class="grid grid-cols-2 gap-4">
            @foreach ($nextQuestion->answers as $answer)
            <div class="bg-white shadow-md rounded-md p-4">
                <input type="radio" name="answer_id" value="{{ $answer->id }}" required>
                <label>{{ $answer->answer_text }}</label>
            </div>
            @endforeach
        </div>
        <button type="submit" class="mt-4 btn btn-primary color-white">Volgende</button>
    </form>

</section>

@endsection