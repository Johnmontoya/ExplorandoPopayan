<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiesgoEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riesgo_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_riesgo')->unsigned();
            $table->foreign('id_riesgo')->references('id')->on('riesgos')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id')->on('eventos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('riesgo_eventos');
    }
}
