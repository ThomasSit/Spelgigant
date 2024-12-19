@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nieuwe vraag toevoegen aan "{{ $quiz->title }}"</h1>

        <form action="{{ route('questions.store', $quiz->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="question_text">Vraag</label>
                <input type="text" name="question_text" id="question_text" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
