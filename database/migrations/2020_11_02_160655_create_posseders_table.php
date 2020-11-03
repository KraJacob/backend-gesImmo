<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePossedersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posseders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('propriete_id');
            $table->unsignedBigInteger('proprietaire_id');
            $table->enum('statut', ['ACTIVE','DELETE','DISABLE'])->default('ACTIVE');
            $table->timestamps();
            $table->foreign('propriete_id')->references('id')->on('proprietes');
            $table->foreign('proprietaire_id')->references('id')->on('proprietaires');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posseders');
    }
}
