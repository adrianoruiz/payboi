<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewPass extends Notification
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
            ->from('contato@construacontatos.com.br', 'Construa Contatos')
            ->subject('Atualize sua senha')
            ->replyTo('contato@construacontatos.com.br', 'Construa Contatos')
            ->greeting('Olá '. $user->name)
            ->line('Para ter acesso so sistema, você deve cadastrar uma nova senha')
            ->action('Cadastrar nova senha', url('http://construacontatos.com.br/password/reset/'.$user->remember_token));
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
            'success' =>'success'
        ];
    }
}
