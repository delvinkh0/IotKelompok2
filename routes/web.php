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
Route::put('/user/update', [UserController::class, 'update_user_info'])->name('user.update_profile');
Route::get('/user/jenis_kulit', [UserController::class, 'jenis_kulit'])->name('user.jenis_kulit');
Route::post('/reset-timer', [UserController::class, 'resetTimer'])->name('reset.timer');

Route::get('/', [UserController::class, 'homepage'])->name('guest.index');

Route::get('login', [UserController::class, 'login'])->name('auth.login');
Route::post('login', [UserController::class, 'login_action'])->name('auth.login_action');
Route::get('register', [UserController::class, 'register'])->name('auth.register');
Route::post('register', [UserController::class, 'register_action'])->name('auth.register_action');

Route::get('/fitzpatrick/1', [UserController::class, 'fitzpatrick_test_intro1'])->name('fitzpatrick_test.fitzpatrick1');
Route::get('/fitzpatrick/2', [UserController::class, 'fitzpatrick_test_intro2'])->name('fitzpatrick_test.fitzpatrick2');
Route::get('/fitzpatrick', [UserController::class, 'fitzpatrick_test'])->name('fitzpatrick_test.fitzpatrick3');
Route::post('/fitzpatrick/submit', [UserController::class, 'submit_fitzpatrick_test'])->name('fitzpatrick_test.submit');

// login register, logout
// Route::get('register', [UserController::class, 'register'])->name('register');
// Route::post('register', [UserController::class, 'register_action'])->name('register.action');
// Route::get('login', [UserController::class, 'login'])->name('login');
// Route::post('login', [UserController::class, 'login_action'])->name('login.action');
// // Route::get('password', [UserController::class, 'password'])->name('password');
// // Route::post('password', [UserController::class, 'password_action'])->name('password.action');
// Route::get('logout', [UserController::class, 'logout'])->name('logout');

//Route::get('/', [UserController::class, 'homepage'])->name('guest.index');

// Route::get('/login', [UserController::class, 'login'])->name('auth.login');
// Route::get('/register', [UserController::class, 'register'])->name('auth.register');

// Route::get('/fitzpatrick/1', [UserController::class, 'fitzpatrick_test_intro1'])->name('fitzpatrick_test.fitzpatrick1');
// Route::get('/fitzpatrick/2', [UserController::class, 'fitzpatrick_test_intro2'])->name('fitzpatrick_test.fitzpatrick2');
// Route::get('/fitzpatrick', [UserController::class, 'fitzpatrick_test'])->name('fitzpatrick_test.fitzpatrick3');
