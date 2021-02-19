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
        DB::table('users')->insert([
         
            'name'=>'Sony',
            'email'=>'Sony@gmail.com',
            'password'=>bcrypt('12345678'),
            'lastname'=>'Oyarzu',
            'gender'=>'1',
            'type_user'=>'1',
            'departamento_usuario'=>'1'

   
  
          ]);
          DB::table('users')->insert([
         
            'name'=>'Ignacio',
            'email'=>'ignacio.robles@ugm.cl',
            'password'=>bcrypt('Nrobles0301'),
            'lastname'=>'Robles',
            'gender'=>'1',
            'type_user'=>'1',
            'departamento_usuario'=>'1'

   
  
          ]);
  
          DB::table('users')->insert([
         
            'name'=>'Ignacia',
            'email'=>'ignacia.robles@ugm.cl',
            'password'=>bcrypt('Nrobles0301'),
            'lastname'=>'Robles',
            'gender'=>'2',
            'type_user'=>'2',
            'departamento_usuario'=>'1'
   
  
          ]);

    }
}
