<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/home', [HomeController::class, 'index']);

Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);

Route::resource('user', UserController::class);


// Route::get('/portofolio', [PortofolioController::class, 'index']);
// Route::get('/resume/create', [PortofolioController::class, 'create']);
// Route::post('/resume', [PortofolioController::class, 'store']);
// Route::delete('/resume/{id}', [PortofolioController::class, 'destroy']);
// Route::get('/resume/{id}/edit', [App\Http\Controllers\PortofolioController::class, 'edit']);
// Route::put('/resume/{id}', [App\Http\Controllers\PortofolioController::class, 'update']);

// Route::post('/about/update-foto', [App\Http\Controllers\PortofolioController::class, 'updateFoto']);


