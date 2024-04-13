<?php

namespace App\Listeners;

use App\Events\checkoutMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendCheckoutMail;

use Auth;
class checkoutsendMail
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
    public function handle(checkoutMail $event): void
    {
        Mail::to($event->order->email)->send(new SendCheckoutMail($event->order));
    
}}
