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
        Schema::create('notes_seccion',function(Blueprint $table){
            $table->bigInteger('id_seccion')->index();
          $table->bigInteger('id_usuario');
          $table->bigInteger('id_evaluado');
          $table->text('descripcion_comentario_general');
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
        
        Schema::dropIfExists('notes_seccion');           



        
        
    }
}
