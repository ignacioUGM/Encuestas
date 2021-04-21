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
        Schema::create('notes_encuesta', function (Blueprint $table) {

        $table->bigInteger('id_encuesta')->index();
          $table->bigInteger('id_usuario');
          $table->bigInteger('id_evaluado');
          $table->text('comentario_general');
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
        Schema::dropIfExists('notes_encuesta');
    }
}
