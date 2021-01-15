<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Historial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial',function(Blueprint $table){

            $table->bigInteger('id_encuesta');
            $table->bigInteger('id_usuario');

            $table->string('nombre_encuesta');
            $table->bigInteger('tipo_encuesta');
            $table->bigInteger('id_estado_usuario');
            $table->timestamp('fecha_historial');
            $table->bigInteger('estado_usuario_encuesta');
     
     
             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial');
    }
}
