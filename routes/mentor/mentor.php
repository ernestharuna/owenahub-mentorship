<?php

use App\Http\Controllers\Mentor\AuthController;
use App\Http\Controllers\Mentor\MentorDashboardController;
use App\Http\Controllers\Mentor\ProfileController;
use Illuminate\Support\Facades\Route;

Route::name('mentor.')->group(function () {
    Route::prefix('mentor')->group(function () {
        Route::middleware(['auth:mentor'])->group(function () {

            Route::prefix('dashboard')->group(function () {
                Route::get('/', MentorDashboardController::class)->name('dashboard');

                Route::prefix('profile')->group(function () {
                    Route::name('profile.')->group(function () {
                        Route::view('/', 'mentor.profile.index')->name('index');
                        Route::view('account-information', 'mentor.profile.account-info')->name('account-info');
                        Route::view('manage-socials', 'mentor.profile.manage-socials')->name('manage-socials');
                        Route::view('achievements', 'mentor.profile.achievements')->name('achievements');
                        Route::view('session-reviews', 'mentor.profile.session-reviews')->name('session-reviews');
                        // Route::view('payments', 'mentor.profile.payments')->name('payments');
                    });
                });
                Route::view('notifications', 'mentor.notifications')->name('notifications');
            });

            Route::get('logput', [AuthController::class, 'logout'])->name('logout');
        });
    });
});
