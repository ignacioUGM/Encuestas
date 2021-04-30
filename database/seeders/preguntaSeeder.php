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
            'descripcion_pregunta'=>'Grado de compromiso que asume en el cumplimiento de sus funciones, tareas asignadas y/o metas',
            'id_seccion'=>'1'
            

  
  
          ]);


          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'GESTION DEL TIEMPO',
            'descripcion_pregunta'=>'se organiza, programa y prioriza las tareas para el cumplimiento de su trabajo, que permita entregar los  requerimientos solicitados por alumnos, áreas y/o jefaturas en los plazos requeridos.',
            'id_seccion'=>'1'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'CUMPLIMIENTO DE LOS PROCEDIMIENTOS EXISTENTES',
            'descripcion_pregunta'=>'Grado de cumplimiento de las normas, procedimientos y políticas existentes.',
            'id_seccion'=>'1'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'CONOCIMIENTO TECNICO',
            'descripcion_pregunta'=>'Conocimiento de las distintas herramientas necesarias para desarrollar sus labores que permiten ejercer adecuadamente su puesto (programas, bases de datos, leyes, reglamentos, normas, sistemas, etc)',
            'id_seccion'=>'1'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'EXACTITUD EN EL TRABAJO',
            'descripcion_pregunta'=>'Coherencia entre el trabajo solicitado y el efectivamente realizado. Grado de perfeccionismo que demuestra en el trabajo, cumple con lo requerido siendo esto de buena calidad.',
            'id_seccion'=>'1'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'TOMA DE DECISIONES Y RESOLUCION ANTE CONFLICTOS',
            'descripcion_pregunta'=>'identifica el /los problemas que se presentan, posee la habilidad para implementar rápidamente soluciones en tiempo y manera óptima ante problemas y/o conflictos.',
            'id_seccion'=>'1'

  
  
          ]);

          //---------------------------------------------------------------------------------------------------


          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'ACTITUD HACIA LA UNIVERSIDAD',
            'descripcion_pregunta'=>'capacidad de defender los intereses de la Institución y adherirse a los lineamientos. Lealtad para con la Institución. Disponibilidad para extender el horario de trabajo ante una necesidad y/o urgencia puntual.',
            'id_seccion'=>'2'

  
  
          ]);          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'ACTITUD HACIA LOS SUPERIORES',
            'descripcion_pregunta'=>' Relación con los superiores inmediatos y no inmediatos. Reconocimiento y respeto. Lealtad, sinceridad y colaboración.',
            'id_seccion'=>'2'

  
  
          ]);          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'ACTITUD HACIA LOS COMPAÑEROS',
            'descripcion_pregunta'=>'forma en la que se maneja con sus compañeros. Respeto y colaboración. Comunicación oportuna y empatía',
            'id_seccion'=>'2'

  
  
          ]);          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'TRABAJO EN EQUIPO',
            'descripcion_pregunta'=>'participa activamente en su equipo y con otros, aportando a la labor a través de un clima de respeto mutuo y confianza con sus pares y/o jefatura,  con sentido de colaboración, cooperación y coordinación. ',
            'id_seccion'=>'2'

  
  
          ]);          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'CAPACIDAD DE ACEPTAR CRITICAS',
            'descripcion_pregunta'=>'Capacidad de recibir críticas constructivas en forma abierta. Grado de adaptación a las mismas. Capacidad de no ofenderse y aprovechar las críticas para mejorar',
            'id_seccion'=>'2'

  
  
          ]);          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'PRESENTACION PERSONAL',
            'descripcion_pregunta'=>'Manera de vestir según su función dentro de la institución, prolijidad',
            'id_seccion'=>'2'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'PREDISPOSICIÓN',
            'descripcion_pregunta'=>'Se muestra dispuesto(a) hacia la tarea, manifiesta una actitud positiva frente a los diferentes requerimientos.',
            'id_seccion'=>'2'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'PUNTUALIDAD',
            'descripcion_pregunta'=>'puntualidad en el horario laboral, entrevistas y/o reuniones dentro y/o fuera de la Institución.',
            'id_seccion'=>'2'

  
  
          ]);

          //----------------------------------------------------------------------------------------------------
 
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'INICIATIVA Y CREATIVIDAD',
            'descripcion_pregunta'=>'Tiene iniciativa para aprender nuevas habilidades, inquietud por avanzar y mejorar. Es proactivo(a) con facilidad para ofrecerse como ejecutor de propuestas. Tiene empuje. Ofrece alternativas para solucionar problemas.',
            'id_seccion'=>'3'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'RESPUESTA BAJO PRESIÓN',
            'descripcion_pregunta'=>'capacidad de mantener la calma y transmitirla a sus compañeros y/o jefatura. Capacidad de tomar decisiones correctas baja presión. Capacidad de sacar aprendizajes de situaciones adversas.',
            'id_seccion'=>'3'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'CAPACIDAD DE MANEJAR MULTIPLES TAREAS',
            'descripcion_pregunta'=>'despliega al máximo sus capacidades y resolver múltiples situaciones a la vez, con habilidades que permiten manejar varios proyectos y/o ideas, siendo capaz de priorizar y concentrarse en las labores que exigen más tiempo.',
            'id_seccion'=>'3'

  
  
          ]);


          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'LIDERAZGO Y COORDINACIÓN',
            'descripcion_pregunta'=>'Carisma, liderazgo natural y participativo, capacidad de mediar en los conflictos internos, planificar acciones con compromiso frente a un propósito común.',
            'id_seccion'=>'3'

  
  
          ]);


          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'INTEGRIDAD',
            'descripcion_pregunta'=>'es honesto(a) en los que dice y hace, asume la responsabilidad de las acciones colectivas y/o individuales. Asegura la transparencia en la administración de datos, recursos y/o información confidencial.',
            'id_seccion'=>'3'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'COMUNICACIÓN',
            'descripcion_pregunta'=>'se dirige al personal con respeto y justicia, desarrolla efectivas relaciones de trabajo. Solicita y brinda retroalimentación.',
            'id_seccion'=>'3'

  
  
          ]);
          DB::table('pregunta')->insert([
             
 
            'nombre_pregunta'=>'APERTURA PARA EL CAMBIO',
            'descripcion_pregunta'=>'muestra sensibilidad hacia los puntos de vista de otros y los comprende. Solicita y aprovecha la retroalimentación recibida de sus colegas y compañeros, aún cuando son opuestas a los suyos.',
            'id_seccion'=>'3'

  
  
          ]);
      




    }
}
