<?php

namespace App\Notifications;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewBookingConfirmed extends Notification
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
            ->subject("Congratulations! Session Confirmed 🧡")
            ->greeting("Congratulations, {$this->booking->user->first_name}!")
            ->line("We're thrilled to inform you that {$this->booking->session->mentor->first_name} has accepted your meeting request ✨.")
            ->line("Be sure to arrive early and make the most of this opportunity 😎👌🏾.")
            ->line("Consider setting a reminder on your favorite to-do app or calendar to ensure you don't miss the scheduled date.")
            ->action('Meet your mentor', url('/user/dashboard/sessions/bookings/' . $this->booking->id))
            ->line('Wishing you a fruitful session! 🎉');
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
