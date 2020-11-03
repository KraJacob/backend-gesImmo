<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codepro')->nullable();
            $table->double('val')->nullable();
            $table->string('adrpro');
            $table->integer('nbapparpro');
            $table->string('nompro');
            $table->unsignedBigInteger('type_propriete_id');
            $table->unsignedBigInteger('localite_id');
            $table->enum('statut', ['ACTIVE','DELETE','DISABLE'])->default('ACTIVE');
            $table->timestamps();

            $table->foreign('type_propriete_id')->references('id')->on('type_proprietes');
            $table->foreign('localite_id')->references('id')->on('localites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proprietes');
    }
}
