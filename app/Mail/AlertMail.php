<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AlertMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        // Puedes pasar parámetros al constructor si necesitas
    }

    public function build()
    {
        return $this->view('mail.alert')
                    ->subject('Alerta de Inicio de Sesión');
    }
}
