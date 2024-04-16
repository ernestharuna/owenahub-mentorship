<?php

namespace App\Http\Controllers\User;

use App\Models\Mentor;
use App\Models\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $enrolled_slices = $user->slice_enrollment()->latest()->get();
        $bookings = Booking::where('user_id', auth()->id())
            ->with('session')
            ->latest()
            ->get();

        if (Auth::user()->misc_info && Auth::user()->misc_info->expertise) {
            $userExpertise = Auth::user()->misc_info->expertise;

            // Query mentors whose expertise matches the current user's expertise
            $mentors = Mentor::whereHas('misc_info', function ($query) use ($userExpertise) {
                $query->where('expertise', $userExpertise);
            })->take(2)->get();
        } else {
            // If user's expertise information is not available, fetch all mentors
            $mentors = Mentor::take(2)->get();
        }

        return view('user.dashboard', [
            'enrolled_slices' => $enrolled_slices,
            'booking' => $bookings,
            'mentors' => $mentors->where('email_is_verified', '!=', null),
        ]);
    }
}
