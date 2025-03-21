<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk Profile dengan Parameter Opsional
Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'profile'])->name('profile.show');

// Route untuk Halaman Form User
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Route untuk Menyimpan Data User
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// Route untuk Profile Tanpa Parameter
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
