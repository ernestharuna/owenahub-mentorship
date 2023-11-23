<?php

use Illuminate\Support\Facades\Route;

Route::name('user.')->group(function () {
    Route::prefix('user')->group(function () {
        Route::middleware('auth:user')->group(function () {
        });
    });
});
