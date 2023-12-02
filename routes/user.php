<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\SliceController;
use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::name('user.')->group(function () {
    Route::prefix('user')->group(function () {
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('dashboard', UserDashboardController::class)->name('dashboard');

            Route::name('slice.')->group(function () {
                Route::get('slices/{slice}', [SliceController::class, 'show'])->name('show');
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
