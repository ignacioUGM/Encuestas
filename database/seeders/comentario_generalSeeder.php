<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class comentario_generalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table('comentario_general')->insert([
              'id_encuesta'=>'1',
              'descripcion_comentario_general'=>'esta es una simulacion del comentario general, me gusta escribir cosas sin sentido cuando hay una prueba de por medio, porque es entretenido, ademas que me gusta escuchar como suenan mis teclas rapidamente',
              'id_usuario'=>'1',
              'id_evaluado'=>'1',

    
    
            ]);
    }
    }
    

    