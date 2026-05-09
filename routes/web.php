<?php
use App\Http\Controllers\ClubController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ClubController::class, 'home'])->name('club.home');

Route::get('/about', [ClubController::class, 'about'])
    ->name('club.about');

Route::get('/activities', [ClubController::class, 'activities'])
    ->name('club.activities');

Route::get('/activities/{slug}', [ClubController::class, 'show'])
    ->where('slug', '[a-z0-9-]+')
    ->name('club.activity.show');