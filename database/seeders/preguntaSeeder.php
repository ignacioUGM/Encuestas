<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class preguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pregunta')->insert([
             
            'id_encuesta'=>'1',
            'nombre_pregunta'=>'esta pregunta es muy mala?',
            'descripcion_pregunta'=>'esta pregunta es muy mala estamos de acuerdo',
            

  
  
          ]);
    }
}
