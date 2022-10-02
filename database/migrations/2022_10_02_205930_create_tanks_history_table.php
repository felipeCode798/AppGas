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
        Schema::create('tanks_history', function (Blueprint $table) {
            $table->id();
            $table->string('station_id');
            $table->string('user_id');
            $table->string('vehicle_id');
            $table->string('param_fuel');
            $table->string('spent');
            $table->string('km');
            $table->string('param_state');
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
        Schema::dropIfExists('tanks_history');
    }
};
