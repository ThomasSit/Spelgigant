@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Antwoord Bewerken</h1>

    <form action="{{ route('answers.update', ['quiz' => $quizId, 'question' => $questionId, 'answer' => $answer->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="answer_text">Antwoordtekst</label>
            <input type="text" name="answer_text" id="answer_text" class="form-control" value="{{ $answer->answer_text }}" required>
        </div>
        <div class="form-group">
            <label for="is_correct">Correct Antwoord?</label>
            <select name="is_correct" id="is_correct" class="form-control">
                <option value="1" {{ $answer->is_correct ? 'selected' : '' }}>Ja</option>
                <option value="0" {{ !$answer->is_correct ? 'selected' : '' }}>Nee</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Edit</button>
    </form>
</div>
@endsection
