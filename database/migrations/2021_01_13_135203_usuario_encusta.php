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
           // $table->index('id_usuario');
            //$table->index('id_encuesta');            
            $table->timestamp('fecha_usuario_encuesta');                 
            //$table->index('estado_encuesta');     
     
     
             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
