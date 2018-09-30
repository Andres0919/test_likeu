<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentesxoperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentesxoperaciones', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_operacion')->unsigned();
            $table->foreign('id_operacion')->references('id')->on('operaciones');


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
        Schema::dropIfExists('agentesxoperaciones');
    }
}
