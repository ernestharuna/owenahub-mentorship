<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;

Route::get('user/auth/google', [GoogleAuthController::class, 'redirectToGmail']);
Route::get('mentor/auth/google', [GoogleAuthController::class, 'redirectToGmailMentor']);

Route::get('auth/google/callback',  [GoogleAuthController::class, 'gmailCallback']);
