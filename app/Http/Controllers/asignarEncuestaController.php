<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\User;


class asignarEncuestaController extends Controller
{
    public function asignarEncuesta(/*Request $request*/){
         
        // $asignacion=asignar::orderBy('usuario_encuesta.id_usuario_encuesta')
        // ->join('users', 'users.id', '=', 'usuario_encuesta.id_usuario')
        // ->join('encuesta', 'encuesta.id_encuesta', '=', 'usuario_encuesta.id_encuesta')
        // ->select('id_usuario_encuesta','id_usuario','id_encuesta','name','nombre_encuesta')
        // ->where('id_encuesta', '=', $request->id_encuesta)
        // ->get();

        $asignarUsuarios=User::orderBy('users.id', 'ASC ')->join('departamentos', 'departamentos.id', '=', 'users.id_departamento')->get();

    
   
        return view('preguntas',compact('asignacionUsuarios'));




    }



    public function index(){
 

        $usuarios2 = User::orderBy('users.id','ASC')
        ->join('tipo_usuario', 'tipo_usuario.id_tipo_usuario', '=' ,'users.type_user')
        ->get();
        $departamentos = Departamento::all();
        return view('usuarios2',compact('usuarios2','departamentos'));


    }
}
