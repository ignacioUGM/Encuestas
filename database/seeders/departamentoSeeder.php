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
        DB::table('departamento')->insert([
             
            'nombre_departamento'=>'Tecnologias de la informacion',
            'descripcion_departamento'=>'este departamento hace practicamente todo',
            'fecha_departamento'=>'10-12-2020',

  
  
          ]);
    }
}
