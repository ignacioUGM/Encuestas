<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipo_usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_usuario')->insert([
             
            'nombre_usuario'=>'Jefe de Área',
            

  
  
          ]);
          DB::table('tipo_usuario')->insert([
             
            'nombre_usuario'=>'Colaborador',
            

  
  
          ]);
          DB::table('tipo_usuario')->insert([
             
            'nombre_usuario'=>'Administrador',
            

  
  
          ]);


    }
}
