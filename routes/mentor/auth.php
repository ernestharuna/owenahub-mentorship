<?php

use App\Http\Controllers\Mentor\AuthController;
use Illuminate\Support\Facades\Route;

Route::name('mentor.')->group(function () {
    Route::prefix('mentor')->group(function () {
        Route::view('login', 'mentor.auth.login')->name('login');
        Route::view('register', 'mentor.auth.register')->name('register');

        Route::post('login', [AuthController::class, 'login'])->name('login.req'); //uses users Auth Controller
        Route::post('register', [AuthController::class, 'register'])->name('register.req');
    });
})->middleware('guest');
