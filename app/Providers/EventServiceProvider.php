<?php

namespace App\Providers;

use App\Events\onBoutiquecreate;
use App\Events\onportefeuillechange;
use App\Events\onretraitStatechange;
use App\Events\ontransaction;
use App\Listeners\onBoutiquecreateListener;
use App\Listeners\onportefeuillechangeListener;
use App\Listeners\onretraitStatechangeListener;
use App\Listeners\ontransactionListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ontransaction::class=>[
            ontransactionListener::class,
        ],
        onretraitStatechange::class=>[
            onretraitStatechangeListener::class,
        ],
        onportefeuillechange::class=>[
            onportefeuillechangeListener::class,
        ],
        onBoutiquecreate::class=>[
            onBoutiquecreateListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
