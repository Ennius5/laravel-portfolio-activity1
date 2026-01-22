<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HobbyController;
// Route::get('/', function () {
//     return view('welcome');
// });

//  anatomy analysis
// Home route
Route::get('/', [HomeController::class, 'index'])-> name ('home');

Route::get('hobbies', [HobbyController::class, 'index'])->name('hobbies');
// About route
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Projects route
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

// Contact route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
