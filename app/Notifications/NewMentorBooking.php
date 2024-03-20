<?php

namespace App\Notifications;

use App\Models\Booking;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewMentorBooking extends Notification
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
            ->subject("OwenaHub: Session request")
            ->greeting("{$this->booking->topic} session!")
            ->line("{$this->booking->user->first_name} wants to connect with you and talk about " . Str::limit($this->booking->topic))
            ->line("Click the button below confirm your availability for this session on your dashboard.")
            ->action('Message mentee', url('/mentor/dashboard/sessions/bookings/' . $this->booking->id))
            ->line('Wishing you both a productive session!');
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
