<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/home', [HomeController::class, 'index']);