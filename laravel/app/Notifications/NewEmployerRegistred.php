<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewEmployerRegistred extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    private $args;
    public function __construct($args)
    {
        $this->args = $args;
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


    public function toMail($user)
    {
        return (new MailMessage)
            ->from(config('mail.from.address'), $user->unidade->fantasia)
            ->subject('Cadastre sua senha')
            ->replyTo($user->unidade->dados->email, $user->unidade->fantasia)
            ->greeting('Olá '. $user->name)
            ->line('Seu cadastro Foi realizado com sucesso!')
            ->line('Agora só falta a sua senha!')
            ->action('Por favor cadastre sua senha', url('/novo-usuario?hash='.$user->remember_token));
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
