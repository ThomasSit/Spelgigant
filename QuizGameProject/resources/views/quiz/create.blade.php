@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Quiz maken</h2>

    <form action="{{ route('quiz.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">title:</label>
            <input type="text" class="form-control" name="title" required>
        </div>  
        
        <div class="form-group">
            <label for="description">description:</label>
            <input type="text" class="form-control" name="description">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
