<?php

namespace App\Livewire\Mentor;

use App\Events\BookingConfirmed;
use App\Models\Booking;
use Livewire\Component;

class SessionStatus extends Component
{
    public $id;
    public $current_status;

    public function updateStatus($status)
    {
        $booking = Booking::find($this->id);
        $booking->status = $status;
        $booking->save();

        event(new BookingConfirmed($booking));

        return redirect('/mentor/dashboard/sessions/bookings/' . $this->id)->with('status', "Booking status updated 👌🏾");
    }

    public function render()
    {
        return view('livewire.mentor.session-status');
    }
}
