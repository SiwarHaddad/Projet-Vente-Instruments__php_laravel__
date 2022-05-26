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
            $table->increments('numCommande');
            $table->unsignedInteger('acteurCommande');
            $table->dateTime('dateCommande');
            //$table->text('contenuCommande');
            $table->decimal('totalPrix', 9, 3);
            $table->string('statusCommande');

            $table->foreign('acteurCommande', 'fk_CommandeClient')->references('idUser')->on('Users')->onUpdate('cascade')->onDelete('cascade');
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
