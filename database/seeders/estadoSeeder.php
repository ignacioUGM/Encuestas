<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado')->insert([
             
            'nombre_estado'=>'activo',
            

  
  
          ]);
          DB::table('estado')->insert([
             
            'nombre_estado'=>'inactivo',
            

  
  
          ]);

          
    }
}
