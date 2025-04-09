<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/menu', function () {
    return view('menu');
})->middleware(['auth', 'verified'])->name('menu');

Route::get('/fasilitas', function () {
    return view('fasilitas');
})->middleware(['auth', 'verified'])->name('fasilitas');

Route::get('/tentang', function () {
    return view('tentang');
})->middleware(['auth', 'verified'])->name('tentang');

Route::get('/reservasi', function () {
    return view('reservasi');
})->middleware(['auth', 'verified'])->name('reservasi'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
