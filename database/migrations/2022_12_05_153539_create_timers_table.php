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
        Schema::create('timers', function (Blueprint $table) {
            $table->id();
            $table->dateTimeTz('sauna_start_time', $precision = 0);
            $table->dateTimeTz('sauna_end_time', $precision = 0);
            $table->dateTimeTz('water_start_time', $precision = 0);
            $table->dateTimeTz('water_end_time', $precision = 0);
            $table->dateTimeTz('outside_start_time', $precision = 0);
            $table->dateTimeTz('outside_end_time', $precision = 0);
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('sauna_id')->constrained('saunas');
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
        Schema::dropIfExists('timers');
    }
};
