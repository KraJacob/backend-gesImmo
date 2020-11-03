<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprietairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codeprop')->nullable();
            $table->string('nomprop');
            $table->string('prenomprop')->nullable();
            $table->date('datenaissprop')->nullable();
            $table->string('lieunaissprop')->nullable();
            $table->string('adrprop')->nullable();
            $table->string('contprop')->nullable();
            $table->string('nationprop')->nullable();
            $table->integer('societe_id')->nullable();
            $table->enum('statut', ['ACTIVE','DELETE','DISABLE'])->default('ACTIVE');
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
        Schema::dropIfExists('proprietaires');
    }
}
