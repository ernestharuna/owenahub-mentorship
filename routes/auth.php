<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

/**
 * AUTHENTICATION Routes for all
 * sers of - Admin, Mentors, Users
 */
Route::middleware('guest')->group(function () {
    Route::name('admin.')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::view('login', 'admin.auth.login')->name('login');
            Route::post('login', [AdminAuthController::class, 'login'])->name('login.req'); //uses Admin Auth Controller
        });
    });

    Route::name('user.')->group(function () {
        Route::prefix('user')->group(function () {
            Route::view('login', 'user.auth.login')->name('login');
            Route::post('login', [AuthController::class, 'login'])->name('login.req'); //uses users Auth Controller

            Route::view('register', 'user.auth.register')->name('register');
            Route::post('register', [AuthController::class, 'register'])->name('register.req');
        });
    });
});

/*
| For Unverfied users
| 
| View for Email sent notification
| Link to resend verification email
*/
Route::middleware('auth')->group(function () {
    Route::get('/email/verify', function () {
        return view('user.auth.verify-email');
    })->name('verification.notice');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');


    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/home');
    })->middleware(['auth', 'signed'])->name('verification.verify');
});
