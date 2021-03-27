<?php

use App\livraisonStatut;
use Illuminate\Database\Seeder;

class livraisonstatutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(livraisonStatut::class)->create();//1
        factory(livraisonStatut::class)->create(["label"=>"Traité"]);//2
        factory(livraisonStatut::class)->create(["label"=>"En cours de livraison"]);//3
        factory(livraisonStatut::class)->create(["label"=>"Commande recuperée"]);//4
        factory(livraisonStatut::class)->create(["label"=>"Validé"]);//5
        factory(livraisonStatut::class)->create(["label"=>"Payée"]);//6
        factory(livraisonStatut::class)->create(["label"=>"Accepté"]);//7
        factory(livraisonStatut::class)->create(["label"=>"Refusée"]);//8
        factory(livraisonStatut::class)->create(["label"=>"Terminée"]);//9
    }
}
