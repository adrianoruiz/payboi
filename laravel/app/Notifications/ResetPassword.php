<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\User;

class ResetPassword extends Notification
{
    use Queueable;

    public $token;


    public function __construct($token)
    {
        $this->token = $token;
    }


    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        // dd($notifiable->toArray());
        $user = User::where('id', $notifiable->id)->update(['remember_token' => $this->token]);


        return (new MailMessage)
            ->subject('Recuperar senha')
            ->line('Você está recebendo este email por que nós recebemos uma solicitação para recuperar sua senha.')
            ->action('Recuperar senha', url('/novo-usuario?hash='. $this->token))
            ->line('Caso você não tenha solicitado uma nova senha, desconsidere este email.');

            //  ->action('Recuperar senha', $this->token)
    }
}
