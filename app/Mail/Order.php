<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Order extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $tel;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $tel)
    {
        $this->name = $name;
        $this->tel = $tel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('order')->subject('Новая заявка с сайта!')->from('samovachikmailer@mail.ru', 'САМО-ВАРчик');
    }
}
