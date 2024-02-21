<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;

Route::get('auth/google', [AuthController::class, 'redirectToGmail']);
Route::get('auth/google/callback',  [AuthController::class, 'handleGmailCallback']);
