@extends('layouts.app')

@section('content')

<main class="p-8 space-y-8">
    <section class="text-center">
        <h2 class="text-2xl font-semibold">Welkom bij spelGigant Leaderboard!</h2>
    </section>

    @foreach($leaderboards as $leaderboard)
        <section>
            <h3 class="text-xl font-semibold text-center">Leaderboard - {{ $leaderboard['quiz']->title }}</h3>
            <div class="mt-4 max-w-lg mx-auto">
                <table class="w-full bg-white dark:bg-gray-800 text-black dark:text-white shadow rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-gray-200 dark:bg-gray-700 text-left">
                            <th class="py-2 px-4">Speler</th>
                            <th class="py-2 px-4">Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($leaderboard['results'] as $result)
                            <tr class="bg-gray-100 dark:bg-gray-800 text-left">
                                <td class="py-2 px-4">{{ $result->user->name }}</td>
                                <td class="py-2 px-4">{{ $result->score }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="py-2 px-4 text-center">Geen scores beschikbaar</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    @endforeach

</main>

@endsection
