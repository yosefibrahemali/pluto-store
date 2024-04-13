<?php

namespace App\Listeners;
use App\Events\checkoutMail;

use Illuminate\Support\Facades\Mail;
use App\Mail\RegisteredMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailVerificationNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        Mail::to($event->user->email)->send(new RegisteredMail($event->user));
    }
}
