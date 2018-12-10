<?php

namespace App\Notifications;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class FollowNotified extends Notification
{
    use Queueable;

    protected $follower;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $follower)
    {
        $this->follower=$follower;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {


        return (new MailMessage)
            ->greeting('Hello!')
            ->line( $this->follower->name . ' ' .'is following you');

    }
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
    public function toDatabase($notifiable)
    {
    return [
    'follower_id' => $this->follower->id,
    'follower_name' => $this->follower->name,
    ];public function toDatabase($notifiable)
    {
    return [
    'follower_id' => $this->follower->id,
    'follower_name' => $this->follower->name,
    ];
    }
    }
     *  /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
