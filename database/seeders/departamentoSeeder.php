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
            'descripcion_departamento'=>'este es el departamento de las tecnologias de la información.',
            'created_at'=>''

  
  
          ]);

          DB::table('departamentos')->insert([
             
            'nombre_departamento'=>'Departamento Administrador',
            'descripcion_departamento'=>'este es el departamento del administrador',
            'created_at'=>'07-04-2021'

  
  
          ]);
    }
}
