@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Vragen voor "{{ $quiz->title }}"</h1>

    <a href="{{ route('questions.create',  $quiz->id) }}" class="btn btn-primary">Nieuwe vraag toevoegen</a>

    @if($quiz->questions->isEmpty())
    <p>Geen vragen gevonden.</p>
    @else
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vraag</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($quiz->questions as $question)
            <tr>
                <td>{{ $question->id }}</td>
                <td>{{ $question->question_text }}</td>
                <td>
                    <a href="{{ route('questions.edit', ['quiz' => $quiz->id, 'question' => $question->id]) }}" class="btn btn-warning">Bewerken</a>
                    <form action="{{ route('questions.destroy', ['quiz' => $quiz->id, 'question' => $question->id]) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijderen</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection