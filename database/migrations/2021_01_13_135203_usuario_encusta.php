<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuarioEncusta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_encuesta',function(Blueprint $table){

            $table->id('id_usuario_encuesta');
            $table->bigInteger('id_usuario')->index();
            $table->bigInteger('id_encuesta')->index();            
            $table->timestamp('fecha_usuario_encuesta');                 
            $table->bigInteger('estado_encuesta')->index();     
     
     
             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_encuesta');
    }
}
