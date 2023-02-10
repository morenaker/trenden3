<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kcalh', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('kcalh');
            $table->foreignId('sport_id')->constrained('sport');
            //$table ->foreign('sport_id')->references('íd')->on('sport');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kcalh');
    }
};
