<?php

namespace App\Http\Controllers;

use App\Models\usuario_encuesta as ModelsUsuario_encuesta;
use Illuminate\Http\Request;

class usuario_encuesta extends Controller
{
    
    public function Usuario_Encuesta(){
 
        $users_encuesta=ModelsUsuario_encuesta::orderBy('usuario_encuesta.id','ASC')
        ->select('seccion.nombre_seccion','seccion.id_encuesta','pregunta.id','pregunta.nombre_pregunta', 'pregunta.descripcion_pregunta', 'usuario_encuesta.id')
        ->join('encuestas','encuestas.id','=','usuario_encuesta.id_encuesta')
        ->join('users','users.id','=','usuario_encuesta.id_usuario')
        ->join('seccion','seccion.id','=','pregunta.id_seccion')

        ->get();
                  
        return view('responder_encuesta',compact('users_encuesta'));

    }
   
















}
