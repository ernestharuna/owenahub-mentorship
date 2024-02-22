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

            Route::prefix('dashboard')->group(function () {
                Route::get('/', DashboardController::class)->name('dashboard');
                // Articles
                Route::prefix('articles')->group(function () {
                    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
                    Route::view('create', 'admin.articles.create')->name('articles.create');
                    Route::post('store', [ArticleController::class, 'store'])->name('articles.create.req');
                    Route::patch('{article}/update', [ArticleController::class, 'update'])->name('articles.update');
                    Route::get('{article}/edit', [ArticleController::class, 'show'])->name('articles.edit');
                    Route::delete('{article}/delete', [ArticleController::class, 'delete'])->name('articles.delete');
                });

                // Slices
                Route::prefix('slices')->group(function () {
                    Route::name('slice.')->group(function () {
                        Route::get('/', [SliceController::class, 'index'])->name('index');
                        Route::view('create', 'admin.slices.create')->name('create');
                        Route::post('store', [SliceController::class, 'store'])->name('create.req');
                        Route::patch('{slice}/update', [SliceController::class, 'update'])->name('update');
                        Route::get('{slice}/edit', [SliceController::class, 'edit'])->name('edit');
                        Route::get('show/{slice}', [SliceController::class, 'show'])->name('show');
                        Route::delete('{slice}/delete', [SliceController::class, 'delete'])->name('delete');
                    });

                    // BITES
                    // ...slice/bite/...
                    Route::prefix('bites')->group(function () {
                        Route::name('bites.')->group(function () {
                            Route::post('{slice}/create', [BiteController::class, 'store'])->name('store');
                            Route::patch('{bite}/update', [BiteController::class, 'update'])->name('update');
                            Route::get('{bite}/edit', [BiteController::class, 'show'])->name('show');
                            Route::delete('{bite}/delete', [BiteController::class, 'delete'])->name('delete');
                        });
                    });
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

                Route::get('logout', [AuthController::class, 'logout'])->name('logout');
            });
        });
    });
});
