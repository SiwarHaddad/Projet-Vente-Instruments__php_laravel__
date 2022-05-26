<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instruments', function (Blueprint $table) {
            $table->increments('idInstrument');
            $table->string('libelleInstrument');
            $table->text('descriptionInstrument');
            $table->unsignedInteger('categorieInstrument');
            $table->string('marqueInstrument');
            $table->string('imageInstrument');
            $table->integer('quantiteDispoInstrument');
            $table->decimal('prixInstrument', 8,3);

            $table->foreign('categorieInstrument', 'fk_InstrumentCategorie')->references('idCategorie')->on('Categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('instruments');
    }
}
