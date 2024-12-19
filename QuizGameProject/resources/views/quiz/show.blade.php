@extends('layouts.app')

@section('content')
<div class="container">

    <button type="button"><a class="btn btn-primary" href="{{ route("questions.index", $quiz->id) }}">Creeer een vraag</a></button>
    <button type="button"><a class="btn btn-dark" href="{{route("quizmanagement")}}">Terug naar Dashboard Manangment</a></button>
    
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>{{ $quiz->title }}</h1>
            </div>
            <div class="card-body">
                <p>{{ $quiz->description }}</p>

                <h2>Vragen</h2>
                <ul class="list-group">
                    @foreach($quiz->questions as $question)
                    <li class="list-group-item">
                        <strong>{{ $question->question_text }} <button><a class="btn btn-primary" href="{{route("answers.index",['quiz'=>$quiz->id,'question'=>$question->id,'answers'=>$question->id])}}">Antwoorden Toevoegen</a></button></strong>
                        <ul class="list-group mt-2">
                            @foreach($question->answers as $answer)
                            <li class="list-group-item">
                                {{ $answer->answer_text }}
                                <span class="badge badge-{{ $answer->is_correct ? 'success' : 'danger' }}">
                                    {{ $answer->is_correct ? '1' : '0' }}
                                </span>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection