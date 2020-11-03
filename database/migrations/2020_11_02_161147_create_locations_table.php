<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('etatcontrltion');
            $table->integer('montcaution');
            $table->integer('montantltion');
            $table->integer('nbmoicaution');
            $table->integer('nbmoiavance')->nullable();
            $table->integer('montavance')->nullable();
            $table->date('datefincontratltion')->nullable();
            $table->integer('dureecontratltion')->nullable();
            $table->date('dateltion')->nullable();
            $table->unsignedBigInteger('type_location_id');
            $table->unsignedBigInteger('locataire_id');
            $table->integer('bail_id')->nullable();
            $table->enum('statut', ['ACTIVE','DELETE','DISABLE'])->default('ACTIVE');
            $table->timestamps();

            $table->foreign('type_location_id')->references('id')->on('type_locations');
            $table->foreign('locataire_id')->references('id')->on('locataires');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
