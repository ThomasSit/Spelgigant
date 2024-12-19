@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Antwoorden voor Vraag: {{ $question->question_text }}</h1>
    <a href="{{ route('answers.create', ['quiz' => $quizId, 'question' => $questionId]) }}" class="btn btn-primary">Nieuw Antwoord</a>
    <a href="{{ route('questions.index', ['quiz' => $quizId, 'question' => $questionId]) }}" class="btn btn-dark">Terug naar Vragen</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tekst</th>
                <th>Correct</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach($answers as $answer)
            <tr>
                <td>{{ $answer->id }}</td>
                <td>{{ $answer->answer_text }}</td>
                <td>{{ $answer->is_correct ? 'Ja' : 'Nee' }}</td>
                <td>
                    <a href="{{ route('answers.edit', ['quiz' => $quizId, 'question' => $questionId, 'answer' => $answer->id]) }}" class="btn btn-warning">Bewerken</a>
                    <form action="{{ route('answers.destroy', ['quiz' => $quizId, 'question' => $questionId, 'answer' => $answer->id]) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijderen</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
