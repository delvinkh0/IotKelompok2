<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/readings', [ReadingController::class, 'index']);
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/profile', [UserController::class, 'profileIndex'])->name('user.profile');
Route::get('/user/jenis_kulit', [UserController::class, 'jenis_kulit'])->name('user.jenis_kulit');

// login register, logout
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
// Route::get('password', [UserController::class, 'password'])->name('password');
// Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');