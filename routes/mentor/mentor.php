<?php

use App\Http\Controllers\Mentor\AuthController;
use App\Http\Controllers\Mentor\MentorDashboardController;
use App\Http\Controllers\Mentor\ProfileController;
use App\Http\Controllers\Mentor\SessionController;
use Illuminate\Support\Facades\Route;

Route::name('mentor.')->group(function () {
    Route::prefix('mentor')->group(function () {
        Route::middleware('auth:mentor')->group(function () {
            Route::view('account-pending', 'mentor.unverified-mentor')->name('unverified');

            Route::prefix('dashboard')->group(function () {
                Route::get('/', MentorDashboardController::class)->name('dashboard')->middleware('verified.mentor');

                Route::prefix('profile')->group(function () {
                    Route::name('profile.')->group(function () {
                        Route::view('/', 'mentor.profile.index')->name('index');
                        Route::view('account-information', 'mentor.profile.account-info')->name('account-info');
                        Route::view('manage-socials', 'mentor.profile.manage-socials')->name('manage-socials');
                        Route::view('achievements', 'mentor.profile.achievements')->name('achievements');
                        Route::view('session-reviews', 'mentor.profile.session-reviews')->name('session-reviews');
                        Route::view('manage-availability', 'mentor.profile.manage-availability')->name('availability');
                    });
                });

                Route::middleware('verified.mentor')->group(function () {
                    Route::prefix('sessions')->group(function () {
                        Route::name('session.')->group(function () {
                            Route::get('bookings', [SessionController::class, 'index'])->name('index');
                            Route::get('bookings/{booking}', [SessionController::class, 'show_booking'])->name('show');
                            Route::post('create_bookingInfo', [SessionController::class, 'create_bookingInfo'])->name('create-booking-info');
                        });
                    });
                });

                Route::view('notifications', 'mentor.notifications')->name('notifications');
                Route::view('support', 'mentor.support')->name('support');
            });

            Route::get('logput', [AuthController::class, 'logout'])->name('logout');
        });
    });
});
