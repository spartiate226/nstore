<?php

namespace App\Listeners;

use App\transaction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ontransactionListener
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
        if($event->transactionArray['type']==1){
            $transaction=transaction::create(['commande_id'=>$event->transactionArray['commande'],
            'portefeuille_state_id'=>$event->transactionArray['portefeuille_state'],
            'transaction_type_id'=>$event->transactionArray['transaction_type'],]);
        }
        if($event->transactionArray['type']==2){
            $transaction=transaction::create([
            'retrait_id'=>$event->transactionArray['retrait'],
            'transaction_type_id'=>$event->transactionArray['transaction_type'],]);
        }
        if($event->transactionArray['type']==3){
            $transaction=transaction::create([
                'commande_id'=>$event->transactionArray['commande'],
            'portefeuille_state_id'=>$event->transactionArray['portefeuille_state'],
            'transaction_type_id'=>$event->transactionArray['transaction_type'],
            ]);
        }
    }
}
