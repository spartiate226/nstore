<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeBoutiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_boutiques', function (Blueprint $table) {
            $table->id();
            $table->string('bnom');
            $table->string('slug');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('nom');
            $table->string('prenom');
            $table->string('pseudonyme');
            $table->string('numero');
            $table->string('email');
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
        Schema::dropIfExists('demande_boutiques');
    }
}
