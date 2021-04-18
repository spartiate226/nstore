<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id')->nullable();
            $table->integer('boutique_id')->nullable();
            $table->integer('store_role_id')->nullable();
            $table->integer('zone_id')->nullable();
            $table->integer('storegroup_id')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('photo')->nullable();
            $table->string('pseudonyme')->nullable();
            $table->string('numero')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
