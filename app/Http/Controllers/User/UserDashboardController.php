<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $enrolled_slices = $user->slice_enrollment()->latest()->get();
        $bookings = Booking::where('user_id', auth()->id())->with('session')->latest()->get();

        return view('user.dashboard', [
            'enrolled_slices' => $enrolled_slices,
            'booking' => $bookings
        ]);
    }
}
