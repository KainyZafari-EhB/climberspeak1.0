<?php
// routes/web.php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ClimbingEventController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{newsItem}', [NewsController::class, 'show'])->name('news.show');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::get('/events', [ClimbingEventController::class, 'index'])->name('events.index');


/*
|--------------------------------------------------------------------------
| Authenticated User Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['web', 'auth'])->group(function () {
    // Dashboard (authenticated)
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

    // Profile
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile', [ProfileController::class, 'update']); // optional
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Events (authenticated)
    Route::get('/events/create', [ClimbingEventController::class, 'create'])->name('events.create');
    Route::post('/events', [ClimbingEventController::class, 'store'])->name('events.store');
    Route::post('/events/{event}/join', [ClimbingEventController::class, 'join'])->name('events.join');
}); // <-- closing the auth group

Route::get('/events/{event}', [ClimbingEventController::class, 'show'])->name('events.show');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [PageController::class, 'home'])->name('dashboard');

        // News Admin Routes
        Route::get('/news', [NewsController::class, 'adminIndex'])->name('news.index');
        Route::resource('news', NewsController::class)->except(['index', 'show']);
        // We exclude 'show' as well because admins can just view the public page or edit.
        // If we want a specific admin show page, we can add it, but for now it's not needed.
    
        Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.create');
    });

// THIS LINE CONNECTS THE TWO FILES
require __DIR__ . '/auth.php';
