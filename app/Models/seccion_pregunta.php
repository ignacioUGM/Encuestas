<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seccion_pregunta extends Model
{
    use HasFactory;

    protected $table = 'seccion';
  
    protected $fillable = [
        
        
        
        'nombre_seccion'
    
    ];
}
