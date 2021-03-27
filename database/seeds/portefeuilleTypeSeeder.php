<?php

use App\portefeuilleType;
use Illuminate\Database\Seeder;

class portefeuilleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portefeuilleType::class)->create();//1
        factory(portefeuilleType::class)->create(['label'=>'livreur']);//2
    }
}
