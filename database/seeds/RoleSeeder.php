<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\role::class)->create();
        factory(\App\role::class)->create(['nom'=>"logistique"]);
        factory(\App\role::class)->create(['nom'=>"commerçant"]);
        factory(\App\role::class)->create(['nom'=>"livreur"]);
        factory(\App\role::class)->create(['nom'=>"staf"]);
        factory(\App\role::class)->create(['nom'=>"abonne"]);
    }
}
