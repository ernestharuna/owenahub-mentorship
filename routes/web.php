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

// Route::get('/', function () {
//     return view('welcome')->name('welcome');
// });
Route::view('/', 'welcome')->name('home');
Route::view('about', 'about')->name('about');
Route::name('guest.')->group(function () {
    Route::name('articles.')->group(function () {
        Route::get('/articles', [GuestController::class, 'articles'])->name('index');
        Route::get('/articles/{article}/show', [GuestController::class, 'show_article'])->name('show');
    });
});
