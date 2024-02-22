<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // return $request->expectsJson() ? null : route('home');
        if ($request->expectsJson()) {
            // If it expects a JSON reponse
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }

        if ($request->is('admin/*')) {
            return route('admin.login');
        } elseif ($request->is('mentor/*')) {
            return route('mentor.login');
        } else {
            return route('user.login');
        }
    }
}
