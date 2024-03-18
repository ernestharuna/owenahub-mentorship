<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\BookingConfirmed;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\NewBookingConfirmed;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBookingConfirmedNotifications implements ShouldQueue
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
    public function handle(BookingConfirmed $event): void
    {
        if ($event->booking->status === 'confirmed') {
            $user = User::find($event->booking->user->id);
            $user->notify(new NewBookingConfirmed($event->booking));
        }
    }
}
