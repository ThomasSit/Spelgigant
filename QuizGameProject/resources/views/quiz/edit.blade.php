@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Quiz Bewerken</h2>

    <form action="{{ route('quiz.update', $quiz->id) }}" method="POST">
        @csrf
        @method('PUT')  

        <div class="form-group">
            <label for="title">title:</label>
            <input type="text" class="form-control" name="title" value="{{$quiz->title}}">
        </div>  
        
        <div class="form-group">
            <label for="description">description:</label>
            <input type="text" class="form-control" name="description" value="{{$quiz->description}}">
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection

