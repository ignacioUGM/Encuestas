<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    use HasFactory;

    protected $table = 'pregunta';
  
  
    protected $fillable = [
        'nombre_pregunta',
        'descripcion_pregunta',
        'id_seccion'
 
        
    ];




}
