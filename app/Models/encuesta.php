<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encuesta extends Model
{
    use HasFactory;
   



    protected $fillable = [
        
        'nombre_encuesta',
        'tipo_encuesta',
        'estado_encuesta',
        'created_at',
        
        
    ];

  
    
   protected $casts = [
    'created_at' => 'datetime',
    
   ];
}
