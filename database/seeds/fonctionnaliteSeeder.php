<?php

use Illuminate\Database\Seeder;

class fonctionnaliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\fonctionnalite::class)->create(['nom'=>"boutique en ligne"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"moyen de paiement orange money"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"paiement par carte visa"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"produit illimite"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"2 comptes"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"4 comptes"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"8 comptes"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"1 themes"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"2 themes"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"5 themes"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"rapport du site"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"code de reduction"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"traduction auto"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"traduction manuelle"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"partage reseaux socials"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"livraison exterieur"]);
        factory(\App\fonctionnalite::class)->create(['nom'=>"livraison express"]);
    }
}
