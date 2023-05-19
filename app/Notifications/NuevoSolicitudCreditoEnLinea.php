<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NuevoSolicitudCreditoEnLinea extends Notification
{
    use Queueable;

    protected $request;

    /**
     * Create a new notification instance.
     */
    public function __construct(Request $request)
    {
        $this->request=$request;
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
                    ->line('#CLIENTE:')
                    ->line($this->request->apellidosNombres)
                    ->line('Monto: '.$this->request->monto)
                    ->line('Tipo: '.$this->request->tipo)
                    ->line('Plazo: '.$this->request->plazo)
                    ->line('Cédula: '.$this->request->cedula)
                    ->line('Celular: '.$this->request->celular)
                    ->line('Correo Electrónico: '.$this->request->correoElectronico);
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
