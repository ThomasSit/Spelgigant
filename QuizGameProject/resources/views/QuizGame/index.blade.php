@extends('layouts.app')


@section('content')
    <main class="p-8 space-y-8">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <h3 class="text-2xl font-semibold text-center">Kies een quiz om te spelen</h3>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($quizzes as $quiz)
                <div class="bg-white shadow-md rounded-md p-4">
                    <h4 class="text-xl font-semibold">{{ $quiz->title }}</h4>
                    <p class="mt-2">{{ $quiz->description }}</p>
                    <a href="{{ route('quiz.start', $quiz->id) }}"
                        class="mt-4 inline-block bg-[#FF2D20] text-green font-semibold px-5 py-3 rounded-md transition hover:bg-[#e5241c]">
                        Speel Quiz
                    </a>
                </div>
            @endforeach
        </section>
    </main>
@endsection