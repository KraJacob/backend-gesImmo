<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocatairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locataires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codeloca')->nullable();
            $table->string('profloca')->nullable();
            $table->string('nationloca')->nullable();
            $table->string('contatloca')->nullable();
            $table->string('adrloca')->nullable();
            $table->string('numidloca')->nullable();
            $table->string('pieceidloca')->nullable();
            $table->string('lieunaissloca')->nullable();
            $table->date('datenaissloca')->nullable();
            $table->string('nomloca')->nullable();
            $table->string('prenomloca')->nullable();
            $table->unsignedBigInteger('type_locataire_id');
            $table->enum('statut', ['ACTIVE','DELETE','DISABLE'])->default('ACTIVE');
            $table->timestamps();

            $table->foreign('type_locataire_id')->references('id')->on('type_locataires');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locataires');
    }
}
