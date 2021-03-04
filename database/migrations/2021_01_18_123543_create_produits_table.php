<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->integer('categorie_id');
            $table->integer('boutique_id');
            $table->string('nom');
            $table->integer('prix');
            $table->integer('prix_promo')->nullable()->default(0);
            $table->string('disponibilite');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->text('description');
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
        Schema::dropIfExists('produits');
    }
}
