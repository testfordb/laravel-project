<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/features', [HomeController::class, 'features'])->name('features');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/team-members', [HomeController::class, 'teamMembers'])->name('team-members');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/skills', [HomeController::class, 'skills'])->name('skills');
Route::get('/work-steps', [HomeController::class, 'workSteps'])->name('work-steps');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/videos', [HomeController::class, 'videos'])->name('videos');
Route::get('/stats', [HomeController::class, 'stats'])->name('stats');
Route::get('/discount', [HomeController::class, 'discount'])->name('discount');
Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

// مسیرهای احراز هویت Breeze
require __DIR__.'/auth.php';