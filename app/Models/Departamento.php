<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Departamento extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'departamentos';

    protected $fillable = [
      
        'nombre_departamento',
        'descripcion_departamento',
        'created_at',
        
    ];

  
    
   protected $casts = [
    'created_at' => 'datetime',
   ];
}
