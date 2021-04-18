<?php

use App\transactionType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(fonctionnaliteSeeder::class);
        $this->call(livraisonstatutSeeder::class);
        $this->call(transactionTypeSeeder::class);
        $this->call(retraitTypeSeeder::class);
    }
}
