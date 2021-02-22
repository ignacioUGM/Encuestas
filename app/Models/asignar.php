<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignar extends Model
{
    protected $table =  'usuario_encuesta';

    use HasFactory;


    protected  $fillable = [
     
     'id_usuario',
     'id_encuesta',
     'fecha_usuario_encuesta',
     'estado_encuesta'
    


    ];

    protected $casts = [
        'fecha_usuario_encuesta' => 'datetime',
        
       ];

}
