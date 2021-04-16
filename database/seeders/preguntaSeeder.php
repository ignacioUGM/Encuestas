<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class preguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'RESPONSABILIDAD',
            'descripcion_pregunta'=>'r',
            'id_seccion'=>'1'
            

  
  
          ]);


          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'GESTION DEL TIEMPO',
            'descripcion_pregunta'=>'g',
            'id_seccion'=>'1'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'CUMPLIMIENTO DE LOS PROCEDIMIENTOS EXISTENTES',
            'descripcion_pregunta'=>'c',
            'id_seccion'=>'1'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'CONOCIMIENTO TECNICO',
            'descripcion_pregunta'=>'co',
            'id_seccion'=>'1'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'EXACTITUD EN EL TRABAJO',
            'descripcion_pregunta'=>'ex',
            'id_seccion'=>'1'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'TOMA DE DECISIONES Y RESOLUCION ANTE CONFLICTOS',
            'descripcion_pregunta'=>'t',
            'id_seccion'=>'1'

  
  
          ]);

          //---------------------------------------------------------------------------------------------------


          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'ACTITUD HACIA LA UNIVERSIDAD',
            'descripcion_pregunta'=>'a',
            'id_seccion'=>'2'

  
  
          ]);          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'ACTITUD HACIA LOS SUPERIORES',
            'descripcion_pregunta'=>'e',
            'id_seccion'=>'2'

  
  
          ]);          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'ACTITUD HACIA LOS COMPAÑEROS',
            'descripcion_pregunta'=>'i',
            'id_seccion'=>'2'

  
  
          ]);          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'TRABAJO EN EQUIPO',
            'descripcion_pregunta'=>'o',
            'id_seccion'=>'2'

  
  
          ]);          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'CAPACIDAD DE ACEPTAR CRITICAS',
            'descripcion_pregunta'=>'u',
            'id_seccion'=>'2'

  
  
          ]);          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'PRESENTACION PERSONAL',
            'descripcion_pregunta'=>'g',
            'id_seccion'=>'2'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'PREDISPOSICIÓN',
            'descripcion_pregunta'=>'j',
            'id_seccion'=>'2'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'PUNTUALIDAD',
            'descripcion_pregunta'=>'k',
            'id_seccion'=>'2'

  
  
          ]);

          //----------------------------------------------------------------------------------------------------
 
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'INICIATIVA Y CREATIVIDAD',
            'descripcion_pregunta'=>'1',
            'id_seccion'=>'3'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'RESPUESTA BAJO PRESIÓN',
            'descripcion_pregunta'=>'2',
            'id_seccion'=>'3'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'CAPACIDAD DE MANEJAR MULTIPLES TAREAS',
            'descripcion_pregunta'=>'3',
            'id_seccion'=>'3'

  
  
          ]);


          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'LIDERAZGO Y COORDINACIÓN',
            'descripcion_pregunta'=>'4',
            'id_seccion'=>'3'

  
  
          ]);


          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'INTEGRIDAD',
            'descripcion_pregunta'=>'5',
            'id_seccion'=>'3'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'COMUNICACIÓN',
            'descripcion_pregunta'=>'6',
            'id_seccion'=>'3'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'APERTURA PARA EL CAMBIO',
            'descripcion_pregunta'=>'7',
            'id_seccion'=>'3'

  
  
          ]);
      




    }
}
