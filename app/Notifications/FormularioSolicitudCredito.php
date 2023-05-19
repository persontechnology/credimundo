<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FormularioSolicitudCredito extends Notification
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
            ->line('Estimado '.$this->request->correoElectronico.',')
            ->line('¡Bienvenido a CREDIMUNDO! Agradecemos sinceramente tu interés en nuestro servicio de crédito. Para proceder con tu solicitud, adjunto encontrarás el formulario de crédito que debes completar.')
            ->line('Por favor, descarga el formulario y tómate el tiempo necesario para completarlo de manera precisa y detallada. Una vez que lo hayas completado, puedes enviárnoslo de vuelta a través de la dirección de correo electrónico info@credimundo.com.ec o entregarlo en persona en nuestra sucursal más cercana.')
            ->line('Si tienes alguna pregunta o requieres asistencia adicional durante el proceso, no dudes en contactarnos a través del número 0989570091 o por correo electrónico a info@credimundo.com.ec. Nuestro equipo de expertos estará encantado de ayudarte.')
            ->line('¡Agradecemos nuevamente por elegir CREDIMUNDO! Esperamos recibir tu formulario y brindarte una respuesta rápida y satisfactoria.')
            ->attach(public_path('pdf/credimundo-solicitud-de-credito.pdf'));
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
