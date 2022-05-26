<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigneCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_commandes', function (Blueprint $table) {
            $table->unsignedInteger('numCommandeL');
            $table->unsignedInteger('idInstrumentL');
            $table->integer('quantite');

            $table->primary(['numCommandeL', 'idInstrumentL']);
            $table->foreign('numCommandeL', 'fk_CommandeLigneCommande')->references('numCommande')->on('Commandes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('idInstrumentL', 'fk_LigneCommandeInstrument')->references('idInstrument')->on('Instruments')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('ligne_commandes');
    }
}
