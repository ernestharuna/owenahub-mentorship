<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mentor\AuthController;

Route::name('mentor.')->group(function () {
    Route::prefix('mentor')->group(function () {
        Route::middleware(['guest:mentor'])->group(function () {
            Route::view('login', 'mentor.auth.login')->name('login');
            Route::view('register', 'mentor.auth.register')->name('register');

            Route::post('login', [AuthController::class, 'login'])->name('login.req');
            Route::post('register', [AuthController::class, 'register'])->name('register.req');
        });
    });
});
