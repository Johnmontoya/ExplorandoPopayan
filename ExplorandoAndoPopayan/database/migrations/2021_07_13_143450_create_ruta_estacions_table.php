<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutaEstacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruta_estacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ruta')->unsigned();
            $table->foreign('id_ruta')->references('id')->on('rutas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_estacion')->unsigned();
            $table->foreign('id_estacion')->references('id')->on('estacions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('ruta_estacions');
    }
}
