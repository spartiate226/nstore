<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoutiqueAnnexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boutique_annexes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('boutique_id');
            $table->integer('quartier_id');
            $table->double("longitude");
            $table->double("latitude");;
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
        Schema::dropIfExists('boutique_annexes');
    }
}
