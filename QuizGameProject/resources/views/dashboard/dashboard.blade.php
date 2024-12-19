@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5 class="mb-4">Welkom, {{ Auth::user()->name }}!</h5>

                        <p>{{ __('You are logged in!') }}</p>
                    </div>

                    @if (Auth::user()->role == 'owner')
                        <div class="card-footer">
                            <a href="{{ route('owner') }}" class="btn btn-primary">Owner</a>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($results as $result)
                            <div class="mb-3">
                                <h6>Quiz: {{ $result->quiz->title }}</h6>
                                <p>Score: {{ $result->score }}</p>
                                <p>Tijd: {{ $result->time_taken }}</p>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
