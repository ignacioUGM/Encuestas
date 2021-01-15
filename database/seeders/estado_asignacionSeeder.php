<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estado_asignacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_asignacion')->insert([
             
            'nombre_estado_asignacion'=>'No sé',
           

  
  
          ]);
    }
}
