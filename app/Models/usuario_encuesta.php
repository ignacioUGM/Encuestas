<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario_encuesta extends Model
{
    use HasFactory;
    
    protected $table = 'usuario_encuesta';

    protected $fillable = [
        
        'id_usuario',
        'id_encuesta',
        'fecha_usuario_encuesta',
        'estado_usuario_encuesta',  
      ];

}
