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
        Schema::create('calificacion', function (Blueprint $table) {
            $table->bigInteger('id_pregunta')->index();
            $table->bigInteger('id_usuario');
            $table->bigInteger('id_evaluado');
            $table->string('comentario_calificacion');
            $table->bigInteger('nota_calificacion');
            $table->timestamp('fecha_calificacion');
          
        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificacion');
    }
}
