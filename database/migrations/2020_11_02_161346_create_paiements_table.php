<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numpaiement')->nullable();
            $table->double('montant');
            $table->string('etatpaieloy')->nullable();
            $table->date('datepaieloy');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('agence_id');
            $table->enum('statut', ['ACTIVE','DELETE','DISABLE'])->default('ACTIVE');
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('agence_id')->references('id')->on('agences');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paiements');
    }
}
