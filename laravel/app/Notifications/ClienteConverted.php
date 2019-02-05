<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Hash;

class ClienteConverted extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $hash = Hash::make($notifiable->email);
        $notifiable->remember_token = $hash;
        $notifiable->save();


 // ->from(config('mail.from.address'), $notifiable->unidade->fantasia)
        return (new MailMessage)
                    ->from(config('mail.from.address'), $notifiable->unidade->fantasia)
                    ->replyTo($notifiable->unidade->dados->email, $notifiable->unidade->fantasia)
                    ->subject('Agora só falta sua senha!')
                    ->line('Seu cadastro foi confirmado com sucesso!, agora só falta a sua senha!')
                    ->action('Por favor atualize sua senha', url('/novo-usuario?hash='.$hash));
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
