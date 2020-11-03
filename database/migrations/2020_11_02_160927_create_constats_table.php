<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codeconst')->nullable();
            $table->string('notifconst');
            $table->date('dateconst');
            $table->unsignedBigInteger('appartement_id');
            $table->unsignedBigInteger('huissier_id');
            $table->enum('statut', ['ACTIVE','DELETE','DISABLE'])->default('ACTIVE');
            $table->timestamps();

            $table->foreign('appartement_id')->references('id')->on('appartements');
            $table->foreign('huissier_id')->references('id')->on('huissiers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constats');
    }
}
