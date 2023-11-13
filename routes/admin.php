<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FeaturedArticleController;

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

            Route::prefix('featuredarticles')->group(function () {
                Route::view('create', 'admin.featured_articles.create')->name('feat_articles.create');
                Route::post('store', [FeaturedArticleController::class, 'store'])->name('feat_articles.create.req');
                Route::patch('{article}/update', [FeaturedArticleController::class, 'update'])->name('feat_articles.update');
                Route::get('{article}/edit', [FeaturedArticleController::class, 'show'])->name('feat_articles.edit');
                Route::delete('{article}/delete', [FeaturedArticleController::class, 'delete'])->name('feat_articles.delete');
            });

            Route::prefix('slices')->group(function () {
                Route::view('create', 'admin.slices.create')->name('slice.create');
            });

            Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        });
    });
});
