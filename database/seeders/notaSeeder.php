<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class notaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calificacion')->insert([
             
            'id_pregunta'=>'1',
            'id_usuario'=>'1',
            'id_evaluado'=>'1',
            'comentario_calificacion'=>'falto ponerle mas empeño 7u7',
            'nota_calificacion'=>'7',
   
            

  
  
          ]);   
    }
}
