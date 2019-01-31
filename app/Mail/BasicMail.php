<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BasicMail extends Mailable
{
    use Queueable, SerializesModels;

    public $filePath, $id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id = 1, $filePath)
    {
        $this->id = $id;
        $this->filePath = $filePath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('bobby@gmail.com', 'Bobby lapointe')
                    ->view('email.basic')
                    ->attach($this->filePath)
                    ->with(['id' => $this->id, 'name'=>'bobby']);
    }
}
