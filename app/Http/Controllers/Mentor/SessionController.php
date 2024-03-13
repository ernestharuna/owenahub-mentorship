<?php

namespace App\Http\Controllers\Mentor;

use App\Models\Booking;
use App\Models\Session;
use App\Models\BookingInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

    public function show_booking(Booking $booking)
    {
        return view('mentor.booking.show', [
            'booking' => $booking
        ]);
    }

    public function create_bookingInfo(Request $request)
    {
        $data = $request->validate([
            'mentor_id' => 'required',
            'booking_id' => 'required',
            'content' => 'required'
        ]);
        BookingInfo::create($data);
        return redirect()->back()->with('status', 'Sent!');
    }
}
