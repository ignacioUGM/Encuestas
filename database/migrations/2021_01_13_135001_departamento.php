<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Departamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos',function(Blueprint $table){
       $table->id('id_departamento');
       //$table->string('id_departamento')->unique();
       $table->string('nombre_departamento')->index();
       $table->text('descripcion_departamento');
       $table->timestamp('fecha_departamento');






        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('departamentos');
    }
}
