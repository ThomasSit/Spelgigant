@extends('layouts.app')

@section('content')

<main class="p-8 space-y-8">

    <h3 class="text-2xl font-semibold text-center">Klik start om het spel te beginnen</h3>

    <section class="flex justify-center items-center">
        <div class="bg-white shadow-md rounded-md p-4 w-25">
            <h1>{{ $quiz->name }}</h1>
            <form method="POST" action="{{ route('quiz.next', $quiz->id) }}">
                @csrf
                <input type="hidden" name="current_question_index" value="0">
                <button type="submit" >
                    {{-- Reden was waarom dit gecommend was omdat het de get method terug gaf terwijl het post moest wezen
                    de a link geeft de get method terug   --}}
                    {{-- <a class="btn btn-primary" href="{{ route('quiz.next', $quiz->id)}}"> --}}
                        Start Quiz
                    {{-- </a> --}}
                </button>
            </form>
        </div>
    </section>
</main>

@endsection