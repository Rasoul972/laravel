<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeToUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $userInfo;

    public function __construct($userInfo)
    {
        $this->userInfo = $userInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("welcome@gmail.com")
            ->subject("به سایت ما خوش آمدید")
            ->attach(asset("image.jpg"))
            ->view('mails.welcome', [
                "userInfo" => $this->userInfo
            ]);
    }
}
