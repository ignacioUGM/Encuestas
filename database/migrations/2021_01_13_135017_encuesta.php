<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Encuesta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta',function(Blueprint $table){

            $table->id('id_encuesta');
            $table->string('nombre_encuesta');
            $table->integer('tipo_de_encuesta');
            $table->timestamp('fecha_de_encuesta');
            $table->integer('estado_encuesta');
            
     
     
     
     
     
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
