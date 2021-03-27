<?php

use App\transactionType;
use Illuminate\Database\Seeder;

class transactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(transactionType::class)->create();//1
        factory(transactionType::class)->create(['label'=>"Retrait"]);//2
        factory(transactionType::class)->create(['label'=>"Paiement livraison"]);//3
    }
}
