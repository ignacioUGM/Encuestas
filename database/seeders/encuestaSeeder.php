<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class encuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('encuesta')->insert([
             
            'nombre_encuesta'=>'Servel',
            'tipo_de_encuesta'=>'1',
            'fecha_de_encuesta'=>'01-01-2021',
            'estado_encuesta'=>'1',

  
  
          ]);
    }
}
