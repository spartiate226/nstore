<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class bladeCustomProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('LoginForm',function (){
            ?>

            <?php
        });
        Blade::directive('registerForm',function (){
            ?>

<?php
        });
        Blade::directive('commandebutton',function (){

        });
    }
}
