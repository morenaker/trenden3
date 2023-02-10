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
        Schema::create('injuries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('problemName');
            $table->integer('length');
            $table->date('problemDate');
            $table->string('desc');
            $table->foreignId('user_id')->constrained('users');

            //$table ->foreign('sport_id')->references('íd')->on('sport');
            //$table ->foreign('user_id')->references('íd')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('injuries');
    }
};
