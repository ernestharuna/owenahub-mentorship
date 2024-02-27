<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\Payments\PaystackController;
use App\Http\Controllers\User\ProfileController;
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

                Route::name('session.')->group(function () {
                    Route::view('sessions', 'user.sessions.index')->name('index');
                });

                Route::get('profile', [ProfileController::class, 'index'])->name('profile');
                Route::view('notifications', 'user.notifications')->name('notifications');

                Route::get('paystack', [PaystackController::class, 'redirectToPaystack'])->name('pay-init');
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
