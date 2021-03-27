<?php

namespace App\Listeners;

use App\retraitHistorique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class onretraitStatechangeListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $state=retraitHistorique::create(['retrait_id'=>$event->retrait->id,'retrait_type_id'=>$event->statut]);
        $event->retrait->update(['retrait_type_id'=>$event->statut]);
    }
}
