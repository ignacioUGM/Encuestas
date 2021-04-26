<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentario_seccion extends Model
{

    use HasFactory;

    protected $table = 'notes_seccion';

    protected $fillable = [
        
        'id_usuario',
        'id_seccion',
        'descripcion_comentario_general',
        'id_evaluado',  
      ];






}



