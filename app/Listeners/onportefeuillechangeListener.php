<?php

namespace App\Listeners;

use App\portefeuilleState;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class onportefeuillechangeListener
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
        $portefeuille=$event->portefeuille;
        $oldstate=$portefeuille->state;
        $oldstate->update(['fin'=>now()]);
        $newstate=portefeuilleState::create([
            'portefeuille_id'=>$portefeuille->id
        ]);
        $portefeuille->update(['portefeuille_state_id'=>$newstate->id]);
    }
}
