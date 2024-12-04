<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingsTable extends Migration
{
    public function up()
    {
        Schema::create('readings', function (Blueprint $table) {
            $table->id();
            $table->float('sensor_reading');
            $table->float('sensor_voltage');
            $table->float('temperature');
            $table->float('pressure');
            $table->float('humidity');
            $table->float('gas');
            $table->float('altitude');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('readings');
    }
}
