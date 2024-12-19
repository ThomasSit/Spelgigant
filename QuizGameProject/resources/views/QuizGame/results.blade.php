@extends('layouts.app')

@section('content')

<main class="p-8 space-y-8">

    <h3 class="text-2xl font-semibold text-center">Resultaten van {{ $quiz->title }}</h3>

    <section class="text-center">
        <p class="text-lg">Je hebt {{ $correctAnswers }} van de {{ $totalQuestions }} vragen correct beantwoord!</p>
        
        @if ($correctAnswers == $totalQuestions)
            <p class="text-green-500 font-bold">Gefeliciteerd, je hebt een perfecte score behaald!</p>
        @elseif ($correctAnswers > $totalQuestions / 2)
            <p class="text-blue-500 font-bold">Goed gedaan! Je hebt meer dan de helft goed.</p>
        @else
            <p class="text-red-500 font-bold">Blijf oefenen! Volgende keer lukt het beter.</p>
        @endif

        <a href="{{ route('QuizGame') }}" class="btn btn-primary mt-4">Terug naar het overzicht</a>
    </section>

</main>

@endsection
