<?php

namespace App\Notifications;

use App\Models\Booking;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewUserBooking extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Booking $booking)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("OwenaHub: Session pending")
            ->greeting("Upcoming meeting with {$this->booking->session->mentor->first_name}")
            ->line("You have a pending request session with {$this->booking->session->mentor->first_name}. You can meet with your mentor when they've confirmed your booking")
            ->line("Endeavor to check back regularly to view your booking status")
            ->action('Message mentor', url('/user/dashboard/sessions/bookings' . $this->booking->id))
            ->line('Have a great time!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
