<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Mentor;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    // User click on Google btn
    public function redirectToGmail(): RedirectResponse
    {
        setcookie('auth_type', "user", time() + 60 * 1, '/', '', true, true);
        return Socialite::driver('google')->redirect();
    }

    // Mentor click on Google btn
    public function redirectToGmailMentor(): RedirectResponse
    {
        setcookie('auth_type', "mentor", time() + 60 * 1, '/', '', true, true);
        return Socialite::driver('google')->redirect();
    }

    // Google callback function
    public function gmailCallback()
    {
        $user = Socialite::driver('google')->user();
        $userType = isset($_COOKIE['auth_type']) ? $_COOKIE['auth_type'] : null;

        if ($userType && in_array($userType, ['user', 'mentor'])) {
            try {
                switch ($userType) {
                    case 'user':
                        $existingUser = User::where('email', $user->email)->first();
                        if ($existingUser) {
                            Auth::login($existingUser);
                            setcookie("auth_type", "", time() - 3600);
                            return redirect()->route('user.dashboard')->with('status', 'Welcome back 😎');
                        } else {
                            $user = User::create([
                                "first_name" => $user->user["given_name"] ?? $user->email,
                                "last_name" => $user->user["family_name"] ?? " ",
                                "email" => $user->email,
                                "email_verified_at" => Carbon::now(),
                                "password" => bcrypt(request(Str::random(8))),
                            ]);

                            Auth::login($user);
                            setcookie("auth_type", "", time() - 3600);
                            return redirect()->route('user.dashboard')->with('status', 'Account created 🎉');
                        }
                        break;

                    case 'mentor':
                        $existingMentor = Mentor::where('email', $user->email)->first();
                        if ($existingMentor) {
                            Auth::guard('mentor')->login($existingMentor);
                            setcookie("auth_type", "", time() - 3600);
                            return redirect()->route('mentor.dashboard')->with('status', 'Welcome back 👋🏼😎');
                        } else {
                            $mentor = Mentor::create([
                                "first_name" => $user->user["given_name"] ?? $user->email,
                                "last_name" => $user->user["family_name"] ?? " ",
                                "email" => $user->email,
                                "email_verified_at" => Carbon::now(),
                                "password" => bcrypt(request(Str::random(8))),
                            ]);

                            Auth::guard('mentor')->login($mentor);
                            setcookie("auth_type", "", time() - 3600);
                            return redirect()->route('mentor.dashboard')->with('status', 'Account created 🎉');
                        }
                        break;
                    default:
                        return redirect()->back()->with('error', 'Invalid authentication type');
                }
            } catch (\Exception $e) {
                return redirect()->back()->with('error', "$e");
            }
        } else {
            return redirect(back()->with('error', 'Authentication failed!'));
        }
    }
}
