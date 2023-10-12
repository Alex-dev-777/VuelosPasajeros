<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotPasajeroVueloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasajero_vuelo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasajero_id');
            $table->unsignedBigInteger('vuelo_id');
            $table->timestamps();

            $table->foreign('pasajero_id')->references('id')->on('pasajeros')->onDelete('cascade');
            $table->foreign('vuelo_id')->references('id')->on('vuelos')->onDelete('cascade');

            // Si quieres evitar registros duplicados de pasajeros en el mismo vuelo:
            $table->unique(['pasajero_id', 'vuelo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasajero_vuelo');
    }
}

