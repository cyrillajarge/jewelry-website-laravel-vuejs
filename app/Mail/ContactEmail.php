<?php

namespace App\Mail;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        try{
            $this->contact['file'];
            return $this->markdown('emails.contact')
                        ->attach($this->contact['file'],
                        [
                            'as' => $this->contact['file']->getClientOriginalName(),
                            'mime' => $this->contact['file']->getClientMimeType()
                        ]);
        } catch(Exception $e) {
            return $this->markdown('emails.contact');
        }
    }
}
