<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;

Route::name('admin.')->group(function () {
    Route::prefix('admin')->group(function () {
        // Guest Routes
        Route::middleware('guest')->group(function () {
            Route::view('login', 'admin.auth.login')->name('login');
            Route::post('login', [AuthController::class, 'login'])->name('login.req');
        });

        // Guarded Routes
        Route::middleware('auth:admin')->group(function () {
            Route::get('dashboard', DashboardController::class)->name('dashboard');

            Route::prefix('articles')->group(function () {
                Route::view('create', 'admin.articles.create')->name('articles.create');
                Route::post('store', [ArticleController::class, 'store'])->name('articles.create.req');
                Route::patch('{article}/update', [ArticleController::class, 'update'])->name('articles.update');
                Route::get('{article}/edit', [ArticleController::class, 'show'])->name('articles.edit');
                Route::delete('{article}/delete', [ArticleController::class, 'delete'])->name('articles.delete');
            });

            Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        });
    });
});
