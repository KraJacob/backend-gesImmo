<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuissiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huissiers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numhussier')->nullable();
            $table->string('mailhussier')->nullable();
            $table->string('faxhussier')->nullable();
            $table->string('telhussier');
            $table->string('adrhussier');
            $table->string('nomhussier');
            $table->string('prenomhussier');
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
        Schema::dropIfExists('huissiers');
    }
}
