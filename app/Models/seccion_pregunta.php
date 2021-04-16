<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seccion_pregunta extends Model
{
    use HasFactory;

    protected $table = 'seccion_preguntas';
  
    protected $fillable = [
        
        'id_encuesta',
        'id_seccion',
        'id_pregunta'
    
    ];
}
