<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::middleware('guest:admin')->group(function () {
            Route::view('login', 'admin.auth.login')->name('login');
            Route::post('login', [AuthController::class, 'login'])->name('login.req'); //uses Admin Auth Controller
        });
    });
});
