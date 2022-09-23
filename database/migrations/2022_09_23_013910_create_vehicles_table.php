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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('id_user'); // Debe tener relacion con la tabla users
            $table->string('type');
            $table->integer('id_fuel'); // Debe tener relacion con la tabala fuels 
            $table->integer('mileage');
            $table->string('placa');
            $table->integer('id_color'); // Debe tener relacion con la tabla colors
            $table->integer('id_mark'); // Debe tener relacion con la tabla marks 
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
        Schema::dropIfExists('vehicles');
    }
};
