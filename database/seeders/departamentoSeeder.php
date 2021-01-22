<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class departamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
             
            'nombre_departamento'=>'Tecnologias de la informacion',
            'descripcion_departamento'=>'este departamento hace practicamente todo',
            

  
  
          ]);
    }
}
