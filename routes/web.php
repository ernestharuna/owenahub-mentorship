<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

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

Route::redirect('/home', '/slices');
Route::redirect('/getstarted', '/getstarted/slices');
Route::view('/', 'welcome')->name('home');
Route::view('about', 'about')->name('about');

// ----------------- Guest Routes
Route::name('guest.')->group(function () {
    Route::name('onboarding.')->group(function () {
        Route::view('/getstarted/slices', 'guest.onboarding.slices')->name('slices');
        Route::view('/getstarted/teams', 'guest.onboarding.teams')->name('teams');
        Route::view('/getstarted/blog', 'guest.onboarding.blog')->name('blog');
        Route::view('/getstarted/signup', 'guest.onboarding.signup')->name('signup');
    });

    Route::name('articles.')->group(function () {
        Route::get('/articles', [GuestController::class, 'articles'])->name('index');
        Route::get('/articles/{article}/{title?}', [GuestController::class, 'show_article'])->name('show');
    });

    Route::get('featuredarticles/{article}/{title?}', [GuestController::class, 'show_feat_article'])->name('feat_articles.show');

    Route::prefix('slices')->group(function () {
        Route::name('slices.')->group(function () {
            Route::get('/', [GuestController::class, 'slices'])->name('index');
            Route::get('/{slice}/overview', [GuestController::class, 'show_slice'])->name('show');
        });
    });
});


require __DIR__ . '/auth.php';
