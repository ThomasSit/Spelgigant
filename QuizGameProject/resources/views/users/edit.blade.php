@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit user</h2>

    <form action="{{ route('users.update', $users->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="naam">Naam:</label>
            <input type="text" class="form-control" name="name" value="{{ $users->name }}">
        </div>

        <div class="form-group">
            <label for="email">email:</label>
            <input type="text" class="form-control" name="email" value="{{ $users->email }}">
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection