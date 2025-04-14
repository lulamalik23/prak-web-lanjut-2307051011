<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

// 🔹 Route untuk halaman utama (welcome)
Route::get('/', function () {
    return view('welcome');
});

// 🔹 Route untuk Profile dengan Parameter Opsional
Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'profile'])->name('profile.show');

// 🔹 Route untuk Halaman Form User
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// 🔹 Route untuk Menyimpan Data User
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// 🔹 Route untuk Profile Tanpa Parameter
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

// 🔹 Route untuk Menampilkan Daftar User (List User)
Route::get('/users', [UserController::class, 'index'])->name('user.index');

// 🔹 Route untuk Menampilkan Detail User (Profile User)
Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');  // Perbaiki penamaan rute
