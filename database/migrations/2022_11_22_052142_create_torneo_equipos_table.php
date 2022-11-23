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
        Schema::create('torneo_equipos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigInteger('id_torneo')->unsigned();
            $table->foreign('id_torneo')
                ->references('id')
                ->on('torneos')
                ->onDelete('cascade');
            $table->bigInteger('id_equipo')->unsigned();
            $table->foreign('id_equipo')
                ->references('id')
                ->on('equipos')
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
        Schema::dropIfExists('torneo_equipos');
    }
};
