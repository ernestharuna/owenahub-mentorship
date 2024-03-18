<?php

namespace App\Livewire\Mentor;

use App\Models\Booking;
use Livewire\Component;
use App\Events\BookingConfirmed;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SessionStatus extends Component
{
    public $id;
    public $current_status;

    // public function updateStatus($status)
    // {
    //     $booking = Booking::find($this->id);
    //     $booking->status = $status;
    //     $booking->save();

    //     event(new BookingConfirmed($booking));

    //     return redirect('/mentor/dashboard/sessions/bookings/' . $this->id)->with('status', "Booking status updated 👌🏾");
    // }

    public function updateStatus($status)
    {
        $booking = Booking::findOrFail($this->id);

        DB::beginTransaction();

        try {
            $booking->status = $status;
            $booking->save();

            event(new BookingConfirmed($booking));

            DB::commit();
            return redirect('/mentor/dashboard/sessions/bookings/' . $this->id)
                ->with('status', "Booking status updated 👌🏾");
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating booking status: ' . $e->getMessage());

            return redirect('/mentor/dashboard/sessions/bookings/' . $this->id)
                ->back()->with('error', 'Something went wrong, please try again in 5 minutes.');
        }
    }


    public function render()
    {
        return view('livewire.mentor.session-status');
    }
}
