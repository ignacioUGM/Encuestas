<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipo_encuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_encuestas')->insert([
             
            'nombre_tipo_encuesta'=>'Jefatura',
            

  
  
          ]);

          DB::table('tipo_encuestas')->insert([
             
            'nombre_tipo_encuesta'=>'General',
            

  
  
          ]);
    }
}
