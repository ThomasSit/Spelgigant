    @extends('layouts.app')

    @section('content')
        <main class="p-8 space-y-8">

            <section class="text-center">
                <h2 class="text-2xl font-semibold">Welkom bij Spelgigant!</h2>
                <p class="mt-2 text-lg">Test je kennis en daag jezelf uit met onze spannende quizzen. Speel zonder inloggen
                    of maak een account aan om je voortgang bij te houden!</p>
                <a
                    class="mt-4 inline-block bg-[#FF2D20] text-white font-semibold px-5 py-3 rounded-md transition hover:bg-[#e5241c]">
                    Speel een Quiz
                </a>
            </section>
            <section>
                <div>

                </div>
            </section>

            <section class="container text-center">
                @if (Auth::check())
                    <h2 class="text-2xl font-semibold">Welkom terug, {{ Auth::user()->name }}!</h2>
                    <div class="col">
                        <h3 class="text-xl font-semibold mb-4">Speluitleg</h3>
                        <p>
                            Elke quiz bestaat uit 10 multiple-choice vragen. Kies het juiste antwoord uit de gegeven opties.
                            Aan het eind van elke quiz
                            krijg je jouw score te zien en hoe lang je erover hebt gedaan. Scoor punten voor elk goed
                            antwoord en probeer de hoogste score
                            te halen!
                        </p>
                    </div>
                @else
                    <div class="row">
                        <div class="col">
                            <h3 class="text-xl font-semibold mb-4">Speluitleg</h3>
                            <p>
                                Elke quiz bestaat uit 10 multiple-choice vragen. Kies het juiste antwoord uit de gegeven
                                opties.
                                Aan het eind van elke quiz
                                krijg je jouw score te zien en hoe lang je erover hebt gedaan. Scoor punten voor elk goed
                                antwoord en probeer de hoogste score
                                te halen!
                            </p>
                        </div>
                @endif
                <div class="col d-flex justify-content-center align-items-center">
                    <button><a class="btn btn-success" href="{{ route('QuizGame') }}">Bekijk Quizzen</a></button>
                </div>
                @if (Auth::check())
                    <div class="col">

                    </div>
                @else
                    <div class="col align-items-">
                        <h3 class="text-xl font-semibold mb-4"><strong>Let op:</strong></h3>
                        <p class="mt-4 text-danger">
                            Als je niet bent ingelogd, worden je scores niet opgeslagen. Maak een
                            account aan om je resultaten te bewaren en de strijd aan te gaan op het leaderboard!
                        </p>
                    </div>
                @endif
            </section>

            {{-- <section class="text-center">
              
            </section> --}}

        </main>
    @endsection
