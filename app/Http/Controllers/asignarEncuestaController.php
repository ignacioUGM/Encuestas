<?php

namespace App\Http\Controllers;

use App\Models\calificaciones;
use App\Models\pregunta;
use App\Models\seccion_pregunta;
use App\Models\usuario_encuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Seccion;

class asignarEncuestaController extends Controller
{
    public function usuario_encuesta()
    {


        try {

            $myUser = Auth::id();

            $encuestaUsuarios = usuario_encuesta::orderBy('usuario_encuesta.id', 'ASC')
                ->join('encuestas', 'encuestas.id_encuesta', 'usuario_encuesta.id_encuesta')
                ->join('tipo_encuestas', 'tipo_encuestas.id_tipo_encuesta', '=', 'encuestas.tipo_encuesta')
                ->join('users', 'users.id', '=', 'usuario_encuesta.id_usuario')
                ->select('encuestas.id_encuesta', 'tipo_encuestas.nombre_tipo_encuesta', 'encuestas.nombre_encuesta', 'encuestas.tipo_encuesta', 'encuestas.created_at')
                ->where('usuario_encuesta.id_usuario', '=', $myUser)
                ->get();


            /*
            $encuestaUsuarios = usuario_encuesta::orderBy('usuario_encuesta.id', 'ASC')
            ->where('usuario_encuesta.id_usuario','=',$myUser)
                ->get();
            // return $encuestaUsuarios;
*/
            return view('encuesta_usuario', compact('encuestaUsuarios'));
        } catch (\Throwable $th) {
            return print $th->getMessage();
        }
    }


    public function recuperarEncuesta(Request $request)
    {


        //aca recuperamos la encuesta hacia el usuario

        $encuestaUsuarios = DB::table('usuario_encuesta')
            ->join('encuestas', 'id_encuesta', '=', 'usuario_encuesta.id_encuesta')
            ->where('id_encuesta', $request->id_encuesta)->first();

        return view('responder_encuesta', compact(' $encuestaUsuarios'));
    }



    public function responder_encuesta(Request $request)
    {


        $seccion = seccion_pregunta::where('id_encuesta', '=', $request->id_encuesta)->get();

        $pregunta = pregunta::orderBy('pregunta.id', 'ASC')

            ->select('seccion.nombre_seccion', 'pregunta.id_seccion', 'seccion.id_encuesta', 'pregunta.id', 'pregunta.nombre_pregunta', 'pregunta.descripcion_pregunta')

            ->join('seccion', 'seccion.id', '=', 'pregunta.id_seccion')

            ->join('encuestas', 'encuestas.id_encuesta', '=', 'seccion.id_encuesta')

            ->where('encuestas.id_encuesta', '=', $request->id_encuesta)

            ->get();

        return view('responder_encuesta', compact('seccion', 'pregunta'));
    }

    public function recuperar(Request $request)
    {
         
     $calificacion = new calificaciones();
    
       $calificacion->id_pregunta = $request->id_pregunta;
       $calificacion->id_usuario = $request->id_usuario;
       $calificacion->nota_calificacion = $request->nota_calificacion;
       $calificacion ->created_at->now();
       $calificacion->updated_at->now();
  
    }
}
