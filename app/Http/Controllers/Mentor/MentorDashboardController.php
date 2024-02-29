<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MentorDashboardController extends Controller
{
    public function __invoke()
    {
        // $user = Auth::user();
        return view('mentor.dashboard');
    }
}
