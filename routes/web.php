<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome')->name('home');
Route::view('about', 'about')->name('about');

/*
| AUTHENTICATION Routes for all
| users of - Admin, Mentors, Users
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
            Route::view('register', 'user.auth.register')->name('register');

            Route::post('login', [AuthController::class, 'login'])->name('login.req'); //uses users Auth Controller
            Route::post('register', [AuthController::class, 'register'])->name('register.req');
        });
    });
});

// ----------------- Guest Routes
Route::name('guest.')->group(function () {
    Route::name('articles.')->group(function () {
        Route::get('/articles', [GuestController::class, 'articles'])->name('index');
        Route::get('/articles/{article}/{title?}', [GuestController::class, 'show_article'])->name('show');
    });

    Route::get('featuredarticles/{article}/{title?}', [GuestController::class, 'show_feat_article'])->name('feat_articles.show');

    Route::prefix('slices')->group(function () {
        Route::name('slices.')->group(function () {
            Route::get('/', [GuestController::class, 'slices'])->name('index');
            Route::get('/{slice}/overview', [GuestController::class, 'show_slice'])->middleware('verified')->name('show');
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
