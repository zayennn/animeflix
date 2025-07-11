<?php

use Illuminate\Support\Facades\Route;

// tolong tambahkan attribute title untuk route / : "title" => "hello world"

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

Route::get('/login', function () {
    return view('auth.login', [
        "title" => "Login Page"
    ]);
});

Route::get('/register', function () {
    return view('auth.register', [
        "title" => "Register Page"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Dashboard Admin"
    ]);
});