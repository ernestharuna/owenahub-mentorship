<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\Payments\PaystackController;
use App\Http\Controllers\User\Payments\VerifyPaymentController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\SessionController;
use App\Http\Controllers\User\SliceController;
use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::name('user.')->group(function () {
    Route::prefix('user')->group(function () {  # user/..
        Route::middleware(['auth', 'verified'])->group(function () {

            Route::prefix('dashboard')->group(function () { # user/dashboard..
                Route::get('/', UserDashboardController::class)->name('dashboard');

                Route::name('slice.')->group(function () {
                    Route::get('slices', [SliceController::class, 'index'])->name('index');
                    Route::get('slices/{slice}', [SliceController::class, 'show'])->name('show');
                });

                Route::prefix('sessions')->group(function () {
                    Route::name('session.')->group(function () {
                        Route::get('bookings', [SessionController::class, 'index'])->name('index');
                        Route::get('bookings/{booking}', [SessionController::class, 'show_booking'])->name('show');
                        Route::post('create_booking', [SessionController::class, 'create_booking'])->name('create-booking');
                        Route::post('create_bookingInfo', [SessionController::class, 'create_bookingInfo'])->name('create-booking-info');
                    });
                });

                Route::prefix('mentors')->group(function () {
                    Route::name('mentor.')->group(function () {
                        Route::get('/', [SessionController::class, 'all_mentors'])->name('index');
                        Route::get('{mentor}', [SessionController::class, 'show_mentor'])->name('show');
                        Route::post('create_mentor_review', [SessionController::class, 'create_mentor_review'])->name('review-mentor');
                    });
                });

                Route::prefix('profile')->group(function () {
                    Route::name('profile.')->group(function () {
                        Route::get('/', [ProfileController::class, 'index'])->name('index');
                        Route::view('account-information', 'user.profile.account-info')->name('account-info');
                        Route::view('manage-socials', 'user.profile.manage-socials')->name('manage-socials');
                        Route::view('achievements', 'user.profile.achievements')->name('achievements');
                        Route::view('course-reviews', 'user.profile.course-reviews')->name('course-reviews');
                        Route::view('payments', 'user.profile.payments')->name('payments');
                    });
                });

                Route::view('notifications', 'user.notifications')->name('notifications');
                Route::view('support', 'user.support')->name('support');

                Route::get('paystack', [PaystackController::class, 'user_payment'])->name('pay-init');
                Route::get('paystack/verify', [VerifyPaymentController::class, 'verify_payment'])->name('pay-verify');
            });
        });

        Route::get('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
    });
});

Route::name('create.')->group(function () {
    Route::post(
        'create_slice_enrollment/{slice_id}',
        [SliceController::class, 'create_slice_enrollment']
    )->middleware('verified')->name('enrollment');
});
