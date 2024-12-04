<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/readings', [ReadingController::class, 'index']);