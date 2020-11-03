<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numappart');
            $table->double('valappart');
            $table->string('nivappart');
            $table->integer('location_id')->nullable();
            $table->integer('constat_id')->nullable();
            $table->unsignedBigInteger('propriete_id');
            $table->unsignedBigInteger('type_appartement_id');
            $table->enum('statut', ['ACTIVE','DELETE','DISABLE'])->default('ACTIVE');
            $table->timestamps();

            $table->foreign('propriete_id')->references('id')->on('proprietes');
            $table->foreign('type_appartement_id')->references('id')->on('type_appartements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appartements');
    }
}
