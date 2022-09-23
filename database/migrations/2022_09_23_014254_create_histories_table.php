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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->integer('id_station'); // Debe tener relacion con la tabla stations
            $table->integer('id_user'); // Debe tener relacion con la tabla users
            $table->integer('id_vehicle'); // Debe tener relacion con la tabla vehicles
            $table->integer('id_fuel'); // Debe tener relacion con la tabla fuels
            $table->integer('total');
            $table->integer('mileage');
            $table->date('date');
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
        Schema::dropIfExists('histories');
    }
};
