<?php

namespace App\Http\Controllers\Mentor;

use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'min:2', 'max:20', 'alpha'],
            'last_name' => ['required', 'min:2', 'max:20', 'alpha'],
            'email' => ['required', 'email', Rule::unique('mentors', 'email')],
            'password' => ['required', 'confirmed', Password::min(8)]
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

            Auth::guard('mentor')->login($mentor);
            return redirect(route('mentor.dashboard'))->with('status', 'Welcome to OwenaHub! 🎉');
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
                return redirect(route('mentor.dashboard'))->with('status', 'Welcome back 🤩');
            };
            return back()->withErrors([
                'email' => 'Invalid credentials'
            ])->onlyInput('email');
        } catch (\Exception $e) {
            throw $e;
            return back()->with('error', $e->getMessage());
        }
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
