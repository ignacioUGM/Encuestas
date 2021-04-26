<?php

namespace App\Http\Controllers;

use App\Models\calificaciones;
use App\Models\comentario_seccion;
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
    }



    public function recuperarEncuesta(Request $request)
    {


        //aca recuperamos la encuesta hacia el usuario

        $recuperar_encuesta = DB::table('usuario_encuesta')
            ->join('encuestas', 'id_encuesta', '=', 'usuario_encuesta.id_encuesta')
            ->join('users', 'users.id', 'usuario_encuesta.id_usuario')
            ->select('usuario_encuesta.name', 'encuestas.nombre_encuesta')
            ->where('id_encuesta', $request->id_encuesta)->first();

        return view('responder_encuesta', compact('recuperar_encuesta'));
    }



    public function responder_encuesta(Request $request)
    {

        $myUsers = Auth::id();
        $seccion = seccion_pregunta::where('id_encuesta', '=', $request->id_encuesta)->get();

        $pregunta = pregunta::orderBy('pregunta.id', 'ASC')

            ->select('seccion.nombre_seccion', 'pregunta.id_seccion', 'seccion.id_encuesta', 'pregunta.id', 'pregunta.nombre_pregunta', 'pregunta.descripcion_pregunta')

            ->join('seccion', 'seccion.id', '=' , 'pregunta.id_seccion')

            ->join('encuestas', 'encuestas.id_encuesta', '=', 'seccion.id_encuesta')

            ->where('encuestas.id_encuesta', '=', $request->id_encuesta)

            ->get();

        return view('responder_encuesta', compact('seccion', 'pregunta', 'myUsers'));
    }


    public function calificaciones(Request $request)
    {

        // return $request;
        //$request->comentario_pregunta;
        $myUser = Auth::id();




        for ($i = 0; $i <= count($request->comentario_pregunta); $i++) {

            if (isset($request['calificacion_' . $i])) {
                $pregunta = new calificaciones();
                $pregunta->id_pregunta = $request->id[$i];
                $pregunta->id_usuario  = $myUser;
                $pregunta->nota_calificacion = $request['calificacion_' . $i];
                $pregunta->comentario_calificacion = $request->comentario_pregunta[$i];
                $pregunta->id_evaluado = 1;
                $pregunta->created_at = now();
                $pregunta->updated_at = now();
                $pregunta->save();
                //  print_r($pregunta);
            }
        }


        $comentarios = $request->comentario_final;

        foreach ($comentarios as $index => $valor) {

            $comentario = new comentario_seccion();
            $comentario->descripcion_comentario_general  = $valor;
            $comentario->id_usuario  = $myUser;
            $comentario->id_seccion = $request->id_seccion;
            $comentario->id_evaluado = 1;
            $comentario->save();
            //print  response()->json($valor);

        }



        // return 'fin';


        return back()->with('flash', 'Se ha respondido correctamente');

        //    $calificacion->save();

        //    return response()->json($pregunta);
    }
}
