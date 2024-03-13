<?php

namespace App\Livewire\Mentor;

use App\Models\Booking;
use Livewire\Component;

class SessionStatus extends Component
{
    public $id;
    public $current_status;

    public function updateStatus($status)
    {
        Booking::where('id', $this->id)->update([
            'status' => $status
        ]);

        return redirect('/mentor/dashboard/sessions/bookings/' . $this->id)->with('status', "Booking status updated 👌🏾");
    }

    public function render()
    {
        return view('livewire.mentor.session-status');
    }
}
