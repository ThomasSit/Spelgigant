@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nieuw Antwoord Toevoegen</h1>

    <form action="{{ route('answers.store', ['quiz' => $quizId, 'question' => $questionId]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="answer_text">Antwoordtekst</label>
            <input type="text" name="answer_text" id="answer_text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="is_correct">Correct Antwoord?</label>
            <select name="is_correct" id="is_correct" class="form-control">
                <option value="0">Nee</option>
                <option value="1">Ja</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
