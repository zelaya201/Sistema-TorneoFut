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
        Schema::create('goles_partidos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('id_partido')->unsigned();
            $table->foreign('id_partido')
                ->references('id')
                ->on('partidos')
                ->onDelete('cascade');
            $table->bigInteger('id_jugador')->unsigned();
            $table->foreign('id_jugador')
                ->references('id')
                ->on('jugadores')
                ->onDelete('cascade');
            $table->integer('minuto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goles_partidos');
    }
};
