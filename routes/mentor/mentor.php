<?php

use App\Http\Controllers\Mentor\AuthController;
use App\Http\Controllers\Mentor\MentorDashboardController;
use Illuminate\Support\Facades\Route;

Route::name('mentor.')->group(function () {
    Route::prefix('mentor')->group(function () {
        Route::middleware('auth:mentor')->group(function () {

            Route::prefix('dashboard')->group(function () {
                Route::get('/', MentorDashboardController::class)->name('dashboard');
            });

            Route::get('logput', [AuthController::class, 'logout'])->name('logout');
        });
    });
});
