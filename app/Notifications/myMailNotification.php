<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Http\Controllers\MyHelpersFunctios;

class myMailNotification extends Notification
{
    use Queueable;


     private $title;
     private $desc;
     private $url;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($title,$desc,$url)
    {
        //
        $this->title = $title;
        $this->desc =  $desc;
        $this->url =   $url;
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

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        $myHelpersFunctios = new MyHelpersFunctios();

        return (new MailMessage)->view(
            'Website.global widgets.notificationEmail', ['title' => $this->title,'desc'=>$this->desc,'url'=>$this->url,
            'meta' => $myHelpersFunctios->getMetaData(),
        ]
        );
    }

    /**
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
