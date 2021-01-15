<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ComentarioGeneral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_general',function(Blueprint $table){
            $table->bigInteger('id_encuesta')->index();
            //$table->string('id_encuesta')->unique();
          $table->bigInteger('id_usuario');
          $table->bigInteger('id_evaluado');
          $table->text('descripcion_comentario_general');
          $table->timestamp('fecha_comentario_general')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('comentario_general');           



        
        
    }
}
