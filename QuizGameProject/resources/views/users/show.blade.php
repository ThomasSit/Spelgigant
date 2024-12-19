@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Naam: {{ $users->name }}</h1>
            </div>
            <div class="card-body">
                <p>Email: {{ $users->email }}</p>
                <a href="{{ route('users.edit', $users->id) }}" class="btn btn-warning">Bewerk</a>
                <form action="{{ route('users.destroy', $users->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Verwijder</button>
                </form>
            </div>
        </div>
    </div>
@endsection
