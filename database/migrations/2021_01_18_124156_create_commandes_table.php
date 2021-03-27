<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->integer('boutique_id');
            $table->string('client_nom');
            $table->string('client_prenom');
            $table->string('quartier_id');
            $table->string('client_tel');
            $table->text('description');
            $table->string('typepaiement');
            $table->integer('livreur_id');
            $table->integer('total');
            $table->string('statut_paiment');
            $table->string('commande_livraison_id');
            $table->text('produit');
            $table->text('coordonne');
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
        Schema::dropIfExists('commandes');
    }
}
