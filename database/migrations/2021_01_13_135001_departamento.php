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
       $table->id();
       $table->string('nombre_departamento')->index();
       $table->text('descripcion_departamento');
       $table->bigInteger('dependencia')->nullable();
       $table->timestamps('');






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
