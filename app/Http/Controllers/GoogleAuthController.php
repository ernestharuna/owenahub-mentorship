<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirectToGmail(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function gmailCallback(): RedirectResponse
    {
        $user = Socialite::driver('google')->user();

        $existing_user = User::where('email', $user->email)->first();

        if ($existing_user) {
            Auth::login($existing_user);
            return redirect()->intended(route('user.dashboard'))->with('status', 'Welcome back');
        } else {
            $new_user = new User();
            $new_user->first_name = $user->user["given_name"] ?? $user->email;
            $new_user->last_name = $user->user["family_name"] ?? " ";
            $new_user->email = $user->email;
            $new_user->email_verified_at = Carbon::now();
            $new_user->password = bcrypt(request(Str::random(8)));
            $new_user->save();
            Auth::login($new_user);
            return redirect()->intended(route('user.dashboard'))->with('status', 'Account Created');
        }
    }
}
