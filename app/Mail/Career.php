<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Career extends Mailable
{
    use Queueable, SerializesModels;

    protected $application;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($application)
    {
        $this->application = $application;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->application);
        return $this->view('mail.application-mail')
            ->with([
                'first_name' => $this->application['first_name'],
                'last_name' => $this->application['last_name'],
                'email' => $this->application['email'],
                'phone' => $this->application['phone'],
                'job' => $this->application['job'],
                'diploma' => $this->application['diploma'],
                'years_exp' => $this->application['years_exp'],
                'application_message' => $this->application['message'],
            ]);
    }
}
