<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
      //  departamento area ti
      
      DB::table('users')->insert([
         
            'name'=>'Sony',
            'email'=>'Sony@gmail.com',
            'password'=>bcrypt('12345678'),
            'lastname'=>'Oyarzu',
            'gender'=>'1',
            'type_user'=>'2',
            'departamento_usuario'=>'3'

   
  
          ]);
          DB::table('users')->insert([
         
            'name'=>'Ignacio',
            'email'=>'ignacio.robles@ugm.cl',
            'password'=>bcrypt('Nrobles0301'),
            'lastname'=>'Robles',
            'gender'=>'1',
            'type_user'=>'2',
            'departamento_usuario'=>'3'

   
  
          ]);
  
          DB::table('users')->insert([
         
            'name'=>'Christian',
            'email'=>'christian.canales@ugm.cl',
            'password'=>bcrypt('123456'),
            'lastname'=>'Canales',
            'gender'=>'1',
            'type_user'=>'2',
            'departamento_usuario'=>'3'
   
  
          ]);


          DB::table('users')->insert([
         
            'name'=>'Paolo',
            'email'=>'paolo.campos@ugm.cl',
            'password'=>bcrypt('123456'),
            'lastname'=>'Campos',
            'gender'=>'1',
            'type_user'=>'1',
            'departamento_usuario'=>'3'
   
  
          ]);

        //  departamento administrador

          DB::table('users')->insert([
         
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('1234'),
            'lastname'=>'Admin',
            'gender'=>'1',
            'type_user'=>'3',
            'departamento_usuario'=>'4'
   
  
          ]);


          // departamento finazas 
 
           
          DB::table('users')->insert([
         
            'name'=>'Tamara',
            'email'=>'tamara.brito@ugm.cl',
            'password'=>bcrypt('1234'),
            'lastname'=>'Brito',
            'gender'=>'2',
            'type_user'=>'1',
            'departamento_usuario'=>'5'
   
  
          ]);
          
      
      //  departamento direccion general de asignacion economicas y administrativas
 
       
      DB::table('users')->insert([
         
        'name'=>'Andres',
        'email'=>'andres.flores@ugm.cl',
        'password'=>bcrypt('1234'),
        'lastname'=>'Flores',
        'gender'=>'1',
        'type_user'=>'1',
        'departamento_usuario'=>'2'


      ]);

    //  departamento de rectoria

    
    DB::table('users')->insert([
         
      'name'=>'Sergio',
      'email'=>'sergio.mena@ugm.cl',
      'password'=>bcrypt('1234'),
      'lastname'=>'Mena',
      'gender'=>'1',
      'type_user'=>'1',
      'departamento_usuario'=>'1'


    ]);





    }
}
