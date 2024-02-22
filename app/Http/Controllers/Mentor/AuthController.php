<?php

namespace App\Http\Controllers\Mentor;

use Carbon\Carbon;
use App\Models\Mentor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
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
            'email' => ['required', 'email', Rule::unique('mentors', 'email')],
            'password' => ['required', 'confirmed', Password::min(8)->letters()->symbols()]
        ]);

        /**
         * Uppercase first letter of 
         * First and Last Name
         */
        $data['first_name'] = ucwords($data['first_name']);
        $data['last_name'] = ucwords($data['last_name']);

        /**
         * @var Mentor $mentor
         */
        try {
            $mentor = Mentor::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ]);

            event(new Registered($mentor));
            Auth::login($mentor);
            return redirect(route('mentor.dashboard'))->with('status', 'Welcome to OwenaHub!');
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
            if (Auth::guard('mentor')->attempt($data, $request->filled('remember'))) {
                $request->session()->regenerate();
                return redirect()->intended(route('mentor.dashboard'));
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
        // dd($user->user);

        $existing_user = Mentor::where('email', $user->email)->first();

        if ($existing_user) {
            Auth::login($existing_user);
        } else {
            $new_mentor = new Mentor();
            $new_mentor->first_name = $user->user["given_name"];
            $new_mentor->last_name = $user->user["family_name"];
            $new_mentor->email = $user->email;
            $new_mentor->email_verified_at = Carbon::now();
            $new_mentor->password = bcrypt(request(Str::random(8)));
            $new_mentor->save();
            Auth::login($new_mentor);
        }
        return redirect()->intended(route('user.dashboard'));
    }

    public function logout(Request $request)
    {
        try {
            Auth::guard('mentor')->logout();

            $request->session()->invalidate();
            $request->session()->regenerate();

            return redirect(route('mentor.login'))->with('status', "See you soon!");
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', $e->getMessage());
        }
    }
}
