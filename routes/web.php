<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\UserController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/readings', [ReadingController::class, 'index']);
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/profile', [UserController::class, 'profileIndex'])->name('user.profile');
Route::get('/user/jenis_kulit', [UserController::class, 'jenis_kulit'])->name('user.jenis_kulit');

Route::get('/', [UserController::class, 'homepage'])->name('guest.index');

Route::get('/login', [UserController::class, 'login'])->name('auth.login');
Route::get('/register', [UserController::class, 'register'])->name('auth.register');

Route::get('/fitzpatrick/1', [UserController::class, 'fitzpatrick_test_intro1'])->name('fitzpatrick_test.fitzpatrick1');
Route::get('/fitzpatrick/2', [UserController::class, 'fitzpatrick_test_intro2'])->name('fitzpatrick_test.fitzpatrick2');
Route::get('/fitzpatrick', [UserController::class, 'fitzpatrick_test'])->name('fitzpatrick_test.fitzpatrick3');
