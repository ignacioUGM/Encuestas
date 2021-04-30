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

      'nombre_departamento' => 'Rectoría',
      'descripcion_departamento' => 'este es el departamento de Rectoría',
      'created_at' => '07-04-2021',
      'dependencia' => ''


    ]);



    DB::table('departamentos')->insert([

      'nombre_departamento' => 'Direccion general de asignación economicas y administrativas',
      'descripcion_departamento' => 'este es el departamento de Direccion general de asignación economicas y administrativas',
      'created_at' => '07-04-2021',
      'dependencia' => '1'


    ]);

    DB::table('departamentos')->insert([

      'nombre_departamento' => 'Tecnologias de la informacion',
      'descripcion_departamento' => 'este es el departamento de las tecnologias de la información.',
      'created_at' => '07-04-2021',
      'dependencia' => '2'


    ]);

    DB::table('departamentos')->insert([

      'nombre_departamento' => 'Departamento Administrador',
      'descripcion_departamento' => 'este es el departamento del administrador',
      'created_at' => '07-04-2021',
      'dependencia' => '2'


    ]);



    DB::table('departamentos')->insert([

      'nombre_departamento' => 'Finanzas',
      'descripcion_departamento' => 'este es el departamento de Finanzas',
      'created_at' => '07-04-2021',
      'dependencia' => '2'


    ]);
  }
}
