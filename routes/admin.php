<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BiteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FeaturedArticleController;
use App\Http\Controllers\Admin\SliceController;

Route::name('admin.')->group(function () {
    Route::prefix('admin')->group(function () {
        // ----------------------- middleware -------------------------
        Route::middleware('auth:admin')->group(function () {
            Route::get('dashboard', DashboardController::class)->name('dashboard');

            // Articles
            Route::prefix('articles')->group(function () {
                Route::view('create', 'admin.articles.create')->name('articles.create');
                Route::post('store', [ArticleController::class, 'store'])->name('articles.create.req');
                Route::patch('{article}/update', [ArticleController::class, 'update'])->name('articles.update');
                Route::get('{article}/edit', [ArticleController::class, 'show'])->name('articles.edit');
                Route::delete('{article}/delete', [ArticleController::class, 'delete'])->name('articles.delete');
            });

            // Featured Articles
            Route::prefix('featuredarticles')->group(function () {
                Route::name('feat_articles.')->group(function () {
                    Route::view('create', 'admin.featured_articles.create')->name('create');
                    Route::post('store', [FeaturedArticleController::class, 'store'])->name('create.req');
                    Route::patch('{article}/update', [FeaturedArticleController::class, 'update'])->name('update');
                    Route::get('{article}/edit', [FeaturedArticleController::class, 'show'])->name('edit');
                    Route::delete('{article}/delete', [FeaturedArticleController::class, 'delete'])->name('delete');
                });
            });

            // Slices
            Route::prefix('slices')->group(function () {
                Route::name('slice.')->group(function () {
                    Route::view('create', 'admin.slices.create')->name('create');
                    Route::post('store', [SliceController::class, 'store'])->name('create.req');
                    Route::get('show/{slice}', [SliceController::class, 'show'])->name('show');
                    Route::delete('{slice}/delete', [SliceController::class, 'delete'])->name('delete');
                });
            });

            // Bites
            Route::prefix('bites')->group(function () {
                Route::name('bites.')->group(function () {
                    Route::post('{slice}/create', [BiteController::class, 'store'])->name('store');
                });
            });

            Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        });
    });
});
