<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Rolemiddleware;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\QuizzesController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuizGameController;
use App\Http\Controllers\UserResultsController;

Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Auth::routes();

Route::get('/leaderboard', [QuizGameController::class, 'leaderboard'])->name('leaderboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserResultsController::class, 'index'])->name('dashboard/dashboard');
});

Route::middleware([RoleMiddleware::class . ':owner'])->group(function () {
    Route::get('/dashboard/owner', [OwnerController::class, 'index'])->name('dashboard/owner');

    Route::get('/users/{id}', [OwnerController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [OwnerController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [OwnerController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [OwnerController::class, 'destroy'])->name('users.destroy');

    Route::get('/quizmanagement', [QuizzesController::class, 'index'])->name('quizmanagement');
    Route::get('/quiz/create', [QuizzesController::class, 'create'])->name('quiz.create');
    Route::get('/quiz/{id}/edit', [QuizzesController::class, 'edit'])->name('quiz.edit');
    Route::get('/quiz/show/{id}', [QuizzesController::class, 'show'])->name('quiz.show');
    Route::delete('/quiz/destroy/{id}', [QuizzesController::class, 'destroy'])->name('quiz.destroy');
    Route::put('/quiz/update{id}', [QuizzesController::class, 'update'])->name('quiz.update');
    Route::post('/quiz', [QuizzesController::class, 'store'])->name('quiz.store');

    Route::prefix('quizzes/{quiz}/questions')->group(function () {
        Route::get('/index', [QuestionController::class, 'index'])->name('questions.index');
        Route::get('/create', [QuestionController::class, 'create'])->name('questions.create');
        Route::post('/', [QuestionController::class, 'store'])->name('questions.store');
        Route::get('/{question}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
        Route::put('/{question}', [QuestionController::class, 'update'])->name('questions.update');
        Route::delete('/{question}', [QuestionController::class, 'destroy'])->name('questions.destroy');
    });

    Route::prefix('quizzes/{quiz}/questions/{question}/answers')->group(function () {
        Route::get('/', [AnswerController::class, 'index'])->name('answers.index');
        Route::get('/create', [AnswerController::class, 'create'])->name('answers.create');
        Route::post('/', [AnswerController::class, 'store'])->name('answers.store');
        Route::get('/{answer}/edit', [AnswerController::class, 'edit'])->name('answers.edit');
        Route::put('/{answer}', [AnswerController::class, 'update'])->name('answers.update');
        Route::delete('/{answer}', [AnswerController::class, 'destroy'])->name('answers.destroy');
    });
});

Route::get('/quizgame', [QuizgameController::class, 'index'])->name('QuizGame');
Route::get('quiz/{quizId}/start', [QuizgameController::class, 'start'])->name('quiz.start');
Route::post('quiz/{quizId}/next', [QuizgameController::class, 'next'])->name('quiz.next');
Route::get('quiz/{quizId}/results', [QuizgameController::class, 'results'])->name('quiz.results');
