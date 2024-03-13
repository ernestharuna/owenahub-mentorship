<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index()
    {
        $sessions = Auth::user()->session()->get();
        return view('mentor.booking.index', [
            'sessions' => $sessions
        ]);
    }
}
