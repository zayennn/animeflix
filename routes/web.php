<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Public Routes
Route::get('/', function () {
    return view('welcome', [
        "title" => "Streaming Anime HD Gratis - Koleksi Terlengkap"
    ]);
});

Route::get('/description', function () {
    return view('description', [
        "title" => "One Piece - Wano Kuni Arc"
    ]);
});

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Admin only routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
    });

    // Petugas only routes
    Route::middleware(['role:petugas'])->group(function () {
        Route::get('/petugas/dashboard', [DashboardController::class, 'petugas'])->name('petugas.dashboard');
    });
});