<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovedadesAgentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedades_agentes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_novedad')->unsigned();
            $table->foreign('id_novedad')->references('id')->on('novedades');


            $table->integer('id_agente')->unsigned();
            $table->foreign('id_agente')->references('id')->on('agentes');

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
        Schema::dropIfExists('novedades_agentes');
    }
}
