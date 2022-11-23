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
        Schema::create('partidos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->date('fecha_partido');
            $table->bigInteger('equipo_local')->unsigned();
            $table->foreign('equipo_local')
                ->references('id')
                ->on('equipos')
                ->onDelete('cascade');
            $table->integer('goles_local');
            $table->bigInteger('equipo_visitante')->unsigned();
            $table->foreign('equipo_visitante')
                ->references('id')
                ->on('equipos')
                ->onDelete('cascade');
            $table->integer('goles_visitante');
            $table->integer('estado');
            $table->bigInteger('id_jornada')->unsigned();
            $table->foreign('id_jornada')
                ->references('id')
                ->on('jornadas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
};
