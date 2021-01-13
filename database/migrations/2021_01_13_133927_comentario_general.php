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
          $table->id('id_encuesta');
          //$table->index('id_usuario');
          //$table->index('id_evaluado');
          $table->text('descripcion_comentario_general');
          $table->timestamp('fecha_comentario_general');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comentario_general',function(Blueprint $table){
           
//


        });
        
    }
}
