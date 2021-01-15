<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuario_encuesta_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario_encuesta')->insert([
             
            'id_usuario'=>'1',
            'id_encuesta'=>'1',
            'fecha_usuario_encuesta'=>'12-12-2021',
            'estado_encuesta'=>'1',
            

  
  
          ]);
    }
}
