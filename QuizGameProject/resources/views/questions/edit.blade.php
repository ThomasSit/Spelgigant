@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nieuwe vraag toevoegen aan "{{ $quiz->title }}"</h1>

    <form action="{{ route('questions.update', ['quiz' => $quiz->id, 'question' => $question->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
            <label for="question_text">Vraag</label>
            <input type="text" name="question_text" id="question_text" value="{{ $question->question_text }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Edit</button>
    </form>
</div>
@endsection