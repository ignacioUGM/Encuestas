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
        Schema::create('encuestas',function(Blueprint $table){
            $table->id('id_encuesta');
            //$table->string('id_encuesta')->unique();
            $table->string('nombre_encuesta');
            $table->bigInteger('tipo_encuesta')->index();
            $table->timestamps();
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
        Schema::dropIfExists('encuestas');
    }
}
