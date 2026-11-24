<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserSpaceController;
use Illuminate\Support\Facades\Route;

// Accueil : choix entre Partie 1 (Pur) et Partie 2 (Breeze)
Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
|--------------------------------------------------------------------------
| PARTIE 1 : Laravel Pur (/pur/...)
|--------------------------------------------------------------------------
*/
Route::prefix('pur')->name('pur.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
        Route::post('/register', [AuthController::class, 'register']);

        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login']);
    });

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [UserSpaceController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [UserSpaceController::class, 'profile'])->name('profile');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});

/*
|--------------------------------------------------------------------------
| PARTIE 2 : Laravel Breeze (/breeze/...)
|--------------------------------------------------------------------------
*/
Route::prefix('breeze')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
});