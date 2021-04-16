<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seccion')->insert([
             
            'nombre_seccion'=>'Dimensión Desempeño y Gestión',
            'id_encuesta'=>'1'
            

  
  
          ]);

          DB::table('seccion')->insert([
             
            'nombre_seccion'=>'Dimensión Actitud Profesional',
            'id_encuesta'=>'1'

  
  
          ]);

          DB::table('seccion')->insert([
             
            'nombre_seccion'=>'Dimensión Habilidades Personales',
            'id_encuesta'=>'1'

  
  
          ]);

          
    }
}
