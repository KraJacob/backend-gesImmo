<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codebail')->nullable();
            $table->string('datefinbail');
            $table->string('dureebail');
            $table->unsignedBigInteger('location_id');
            $table->enum('statut', ['ACTIVE','DELETE','DISABLE'])->default('ACTIVE');
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bails');
    }
}
