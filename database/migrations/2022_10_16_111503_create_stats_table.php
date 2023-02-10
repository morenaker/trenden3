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
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            $table->string('born')->nullable();
            $table->double('height')->nullable();
            $table->double('weight');
            $table->double('bodyfat')->nullable();
            $table->double('biceps_r')->nullable();
            $table->double('biceps_l')->nullable();
            $table->double('triceps_r')->nullable();
            $table->double('triceps_l')->nullable();
            $table->double('thigh_r')->nullable();
            $table->double('thigh_l')->nullable();
            $table->double('calf_r')->nullable();
            $table->double('calf_l')->nullable();
            $table->double('chest')->nullable();
            $table->double('hip')->nullable();
            $table->double('neck')->nullable();


            $table->date('mesureDate');

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
        Schema::dropIfExists('stats');
    }
};
