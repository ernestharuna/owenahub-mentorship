<?php

namespace App\Listeners;

use App\Models\User;
use App\Models\Mentor;
use App\Events\BookingCreated;
use App\Notifications\NewMentorBooking;
use App\Notifications\NewUserBooking;
use App\Notifications\NewUserrBooking;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBookingCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(BookingCreated $event): void
    {
        $user = User::find($event->booking->user->id);
        $user->notify(new NewUserBooking($event->booking));

        $mentor = Mentor::find($event->booking->session->mentor->id);
        $mentor->notify(new NewMentorBooking($event->booking));
    }
}
