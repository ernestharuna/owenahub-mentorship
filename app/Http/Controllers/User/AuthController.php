<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'min:2', 'max:20', 'alpha'],
            'last_name' => ['required', 'min:2', 'max:20', 'alpha'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', Password::min(8)->letters()->symbols()]
        ]);

        /**
         * Uppercase first letter of 
         * First and Last Name
         */
        $data['first_name'] = ucwords($data['first_name']);
        $data['last_name'] = ucwords($data['last_name']);

        /**
         * @var User $user
         */
        try {
            $user = User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ]);

            event(new Registered($user));
            Auth::login($user);
            return redirect(route('user.dashboard'))->with('status', 'Welcome to OwenaHub!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
            throw $e;
        }
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        try {
            if (Auth::attempt($data, $request->filled('remember'))) {
                $request->session()->regenerate();
                return redirect()->intended(route('user.dashboard'));
            };
            return back()->withErrors([
                'email' => 'Invalid credentials'
            ])->onlyInput('email');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', $e->getMessage());
        }
    }

    public function redirectToGmail(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGmailCallback(): RedirectResponse
    {
        $user = Socialite::driver('google')->user();
        dd($user->user);

        $existing_user = User::where('email', $user->email)->first();

        if ($existing_user) {
            Auth::login($existing_user);
        } else {
            $new_user = new User();
            $new_user->first_name = $user->user->given_name;
            $new_user->last_name = $user->user->family_name;
            $new_user->email = $user->email;
            $new_user->email_verified_at = Carbon::now();
            $new_user->password = bcrypt(request(Str::random(8)));
            $new_user->save();
            Auth::login($new_user);
        }
        return redirect()->intended(route('user.dashboard'));
    }

    public function logout(Request $request)
    {
        try {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerate();

            return redirect(route('user.login'))->with('status', "See you soon!");
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', $e->getMessage());
        }
    }
}
