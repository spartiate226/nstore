<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create();
        factory(\App\User::class)->create(['role_id'=>2,'pseudonyme'=>'spartan','numero'=>'61750700',"email"=>"eouompeba@yahoo.com"]);
    }
}
