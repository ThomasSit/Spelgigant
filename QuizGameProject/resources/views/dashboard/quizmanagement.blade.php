@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Quiz Management</h1>
            <a href="{{ route('quiz.create') }}" class="btn btn-primary">Create Quiz</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Quiz title</th>
                        <th>Quiz Description</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($quizzes as $quiz)
                    <tr>
                        <td>{{ $quiz->title }}</td>
                        <td>{{ $quiz->description }}</td>
                        <td>
                            <a href="{{ route('quiz.edit', $quiz->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('quiz.show', $quiz->id) }}" class="btn btn-info">View</a>
                            <form style="display:inline" method="POST" action="{{ route('quiz.destroy', $quiz->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    


@endsection