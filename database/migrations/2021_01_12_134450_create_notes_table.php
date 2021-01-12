<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('nombre_usuario');
            $table->string('apellido_usuario');
            $table->string('clave_usuario');
          
        });
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('id_pregunta');
            $table->mediumText('comentario_calificacion');
            $table->integer('nota_calificacion');
            $table->id('id_usuario');
            $table->id('id_evaluado');
            $table->date('fecha_calificacion');
          
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
