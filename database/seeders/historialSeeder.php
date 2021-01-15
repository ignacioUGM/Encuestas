<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class historialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('historial')->insert([
             
            'id_encuesta'=>'1',
            'id_usuario'=>'2',
            'nombre_encuesta'=>'patito feo',
            'tipo_encuesta'=>'1',
            'id_estado_usuario'=>'1',
            'fecha_historial'=>'01-14-2020',
            'estado_usuario_encuesta'=>'1'

  
  
          ]);
    }
}
