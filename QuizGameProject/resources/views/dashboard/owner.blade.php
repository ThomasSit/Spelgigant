@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welkom {{ Auth::user()->name }}! </h1>

    <div class="card mb-4">
        <div class="card-header">
            <h2>Gebruikers</h2>
        </div>
        <div class="card-body">
            @if($users->isEmpty())
                <p>Geen gebruikers gevonden</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Naam</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Show</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td ><a class="btn btn-primary" href="{{route('users.edit', $user->id)}}">Edit</a></td>
                            <td ><a class="btn btn-info" href="{{route('users.show', $user->id)}}">Show</a></td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection

<style>
    .sub-container {
        margin-top: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        flex-direction: column;
    }
</style>
