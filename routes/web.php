<?php

use App\Http\Controllers\ArbitrageFinderController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LanguageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/* Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
}); */

Route::get('/', [LandingController::class, 'index'])->name('index');
Route::get('/izobrazevanje', [LandingController::class, 'education'])->name('education');
Route::get('/servis', [LandingController::class, 'service'])->name('service');
Route::get('/spletni-razvoj', [LandingController::class, 'webDesign'])->name('web-design');
Route::get('/kontakt', [LandingController::class, 'contact'])->name('contact');

Route::post('/language-switch', [LanguageController::class, 'switch'])->name('switch.language');


/** Authenticated routes */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {

        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::name('arbitrage-finder.')->prefix('arbitrage-finder')->namespace('ArbitrageFinder')->group(function () {

        Route::get('/', [ArbitrageFinderController::class, 'index'])->name('index');
    });

});
