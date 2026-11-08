<?php

namespace Modules\Custom\app\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SupportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build(): self
    {
        $subject = 'Message from VCARDe | '.$this->data['subject'];

        return $this->subject($subject)
            ->markdown('custom::email.contact')
            ->with([
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'phone' => $this->data['phone'],
                'subject' => $this->data['subject'],
                'message' => $this->data['message']
            ]);
    }
}
