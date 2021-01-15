<?php

namespace Database\Seeders;

use App\Http\Controllers\encuestas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory(10)->create();
        $this->call(comentario_generalSeeder::class);
        $this->call(departamentoSeeder::class);
        $this->call(encuestaSeeder::class);
        $this->call(estado_asignacionSeeder::class);
        $this->call(estadoSeeder::class);
        $this->call(generoSeeder::class);
        $this->call(historialSeeder::class);
        $this->call(notaSeeder::class);
        $this->call(preguntaSeeder::class);
        $this->call(tipo_encuestaSeeder::class);
        $this->call(tipo_usuarioSeeder::class);
        $this->call(usuario_encuesta_Seeder::class);
        $this->call(usuarioSeeder::class);
        
        
        
      
        
        
        
        
         
        
    }
}
