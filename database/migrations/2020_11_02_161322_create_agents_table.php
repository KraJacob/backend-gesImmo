<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mailagent')->nullable();
            $table->string('telagent');
            $table->string('adragent')->nullable();
            $table->string('contagent')->nullable();
            $table->string('lieunaissagent')->nullable();
            $table->string('nomagent')->nullable();
            $table->string('prenomagent')->nullable();
            $table->string('fonctionagent')->nullable();
            $table->unsignedBigInteger('agence_id');
            $table->enum('statut', ['ACTIVE','DELETE','DISABLE'])->default('ACTIVE');
            $table->timestamps();

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
        Schema::dropIfExists('agents');
    }
}
