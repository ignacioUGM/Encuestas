<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeUser extends Model
{
    use HasFactory;
    protected $table = 'tipo_usuario';

    protected $fillable = [
        
      'nombre_usuario'
        
        
    ];

}
