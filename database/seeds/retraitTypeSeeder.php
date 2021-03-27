<?php

use App\retraitType;
use Illuminate\Database\Seeder;

class retraitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(retraitType::class)->create();
        factory(retraitType::class)->create(['label'=>'Validé']);
    }
}
