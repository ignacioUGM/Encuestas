<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_preguntas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_encuesta')->index();
          $table->bigInteger('id_usuario');
          $table->bigInteger('id_evaluado');
          $table->text('descripcion_comentario_preguntas');
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
        Schema::dropIfExists('comentario_preguntas');
    }
}
