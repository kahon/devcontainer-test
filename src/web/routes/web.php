<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');

Route::get('/', function() {
    return auth()->check() ? redirect()->route('dashboard') : redirect()->route('login');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
