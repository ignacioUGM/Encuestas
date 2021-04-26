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
        DB::table('encuestas')->insert([
             
            'nombre_encuesta'=>'Encuesta Desempeño',
            'tipo_encuesta'=>'2',
            'estado_encuesta'=>'1',
            'created_at'=>'2021-04-21'
  
  
          ]);
        //   DB::table('encuestas')->insert([
             
        //     'nombre_encuesta'=>'Servel2',
        //     'tipo_encuesta'=>'2',
        //     'created_at'=>'01-01-2021',
        //     'estado_encuesta'=>'1',

  
  
        //   ]);
    }

}
