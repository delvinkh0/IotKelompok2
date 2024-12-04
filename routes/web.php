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
