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
Route::redirect('/mentor/getstarted', '/mentor/getstarted/empower');

Route::view('/', 'welcome')->name('home');
Route::view('about', 'about')->name('about');
Route::view('terms-of-service', 'terms-of-service')->name('tos');
Route::view('privacy-policy', 'privacy-policy')->name('pp');
// Route::view('getstarted', 'guest.login-as')->name('login-as');

// ----------------- Guest Routes
Route::name('guest.')->group(function () {
    Route::name('onboarding.')->group(function () {
        Route::view('/getstarted/slices', 'guest.onboarding.slices')->name('slices');
        Route::view('/getstarted/teams', 'guest.onboarding.teams')->name('teams');
        Route::view('/getstarted/blog', 'guest.onboarding.blog')->name('blog');
        Route::view('/getstarted/signup', 'guest.onboarding.signup')->name('signup');
        // ------------------------------------------
        Route::prefix('mentor')->group(function () {
            Route::name('mentor.')->group(function () {
                Route::view('getstarted/empower', 'guest.onboarding_2.screen_1')->name('empower');
                Route::view('getstarted/flexible-timing', 'guest.onboarding_2.screen_2')->name('schedule');
                Route::view('getstarted/earn', 'guest.onboarding_2.screen_3')->name('earn');
                Route::view('getstarted/signup', 'guest.onboarding_2.screen_4')->name('signup');
            });
        });
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

Route::fallback(function () {
    return view('error');
});

require __DIR__ . '/admin/auth.php';
require __DIR__ . '/admin/admin.php';

require __DIR__ . '/mentor/auth.php';
require __DIR__ . '/mentor/mentor.php';

require __DIR__ . '/user/user.php';
require __DIR__ . '/user/auth.php';

require __DIR__ . '/google_auth.php';
