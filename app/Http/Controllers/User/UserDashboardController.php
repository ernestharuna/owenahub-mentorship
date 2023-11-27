<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $enrolled_slices = $user->slice_enrollment()->latest()->get();
        // dd($enrolled_slices);

        return view('user.dashboard', [
            'enrolled_slices' => $enrolled_slices
        ]);
    }
}
