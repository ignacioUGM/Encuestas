<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calificaciones extends Model
{
    use HasFactory;

    protected $table = 'calificacion';

    protected $fillable = [
      
        'id_pregunta',
        'id_usuario',
        'id_evaluado',
        'comentario_calificacion',
        'nota_calificacion'
        
    ];
}
