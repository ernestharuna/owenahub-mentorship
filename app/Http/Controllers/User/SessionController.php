<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingInfo;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    /**
     * Shows the user all their booked sessions and suggested mentors
     */
    public function index()
    {
        $bookings = Booking::where('user_id', auth()->id())
            ->with('session')
            ->latest()
            ->get();

        // If the user has expertise information available
        if (Auth::user()->misc_info && Auth::user()->misc_info->expertise) {
            $userExpertise = Auth::user()->misc_info->expertise;

            // Query mentors whose expertise matches the current user's expertise
            $mentors = Mentor::whereHas('misc_info', function ($query) use ($userExpertise) {
                $query->where('expertise', $userExpertise);
            })->take(3)->get();
        } else {
            // If user's expertise information is not available, fetch all mentors
            $mentors = Mentor::take(3)->get();
        }

        return view('user.bookings.index', [
            'mentors' => $mentors,
            'bookings' => $bookings
        ]);
    }


    /**
     * Show the data for a booking
     */
    public function show_booking(Booking $booking)
    {
        return view('user.bookings.show', [
            'booking' => $booking
        ]);
    }

    /**
     * Show all mentors to the user
     */
    public function all_mentors()
    {
        $mentors = Mentor::get();
        return view('user.mentor.index', [
            'mentors' => $mentors
        ]);
    }

    /**
     * Show the mentor's profile
     */
    public function show_mentor(Mentor $mentor)
    {
        return view('user.mentor.show', [
            'mentor' => $mentor
        ]);
    }

    /**
     * Create a session booking
     */
    public function create_booking(Request $request)
    {
        $data = $request->validate([
            'topic' => 'required',
            'session_id' => 'required'
        ]);

        $request->user()->booking()->create($data);

        return redirect(route('user.session.index'))->with('status', 'Session booked!');
    }

    public function create_bookingInfo(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'booking_id' => 'required',
            'content' => 'required'
        ]);
        BookingInfo::create($data);

        return redirect()->back()->with('status', 'Sent!');
    }
}
