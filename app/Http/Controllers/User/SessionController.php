<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingInfo;
use App\Models\Mentor;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Shows the user all their booked sessions and suggested mentors
     */
    public function index()
    {
        $mentors = Mentor::get();
        $bookings = Booking::where('user_id', auth()->id())->with('session')->latest()->get();
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
