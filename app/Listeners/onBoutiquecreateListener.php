<?php

namespace App\Listeners;

use App\Mail\NayamaxMail;
use App\Mail\storecreateEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class onBoutiquecreateListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $content=$event->content;
        Mail::to($content['mailto'])->send(new NayamaxMail($content));
    }
}
