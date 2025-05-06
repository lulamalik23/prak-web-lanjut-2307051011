<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'profile'])->name('profile.show');

Route::get('/user', [UserController::class, 'index'])->name('user.index');            // List
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');   // Form Tambah
Route::post('/user', [UserController::class, 'store'])->name('user.store');           // Simpan
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');         // Detail
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');    // Form Edit
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');     // Simpan Edit
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy'); // Hapus
