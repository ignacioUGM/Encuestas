<?php

namespace App\Http\Controllers;

use App\Models\calificaciones;
use App\Models\comentario_seccion;
use App\Models\Departamento as ModelsDepartamento;
use App\Models\pregunta;
use App\Models\seccion_pregunta;
use App\Models\User;
use App\Models\usuario_encuesta;
use Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Seccion;

class asignarEncuestaController extends Controller
{
    public function usuario_encuesta()
    {


        //aca recuperamos la encuesta para que el usuario pueda responderla


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

     /*
            esta es parte de la consulta que hay que transformar 


        $myUsers = Auth::id();

        $my = User::select('')->where('users.departamento_usuario','=','departamentos.id')->join('departamentos','departamentos.id','=','users.departamento_usuario');
        $departs = ModelsDepartamento::all()->where('users.departamento_usuario','=','departamentos.id')->join('users','users.departamento_usuario','=','departamentos.id');
        $allusers = User::all()->where('departamentos.id','=','users.departamento_usuario')->join('departamentos','departamentos.id','=','users.departamento_usuario');
      */  




     /*  
     
     aca hay que transformar toda esta consulta para poder evaluarse por dependencia
     
     drop table #my

select u.id,d.id as id_departamento,d.dependencia 
into #my
from users u,departamentos d
where u.departamento_usuario=d.id
and u.id = 7 --don andres

drop table #departs
select u.id as usuario_id,u.name, d.id as departamento_id, d.nombre_departamento,d.dependencia
into #departs
from users u,departamentos d
where u.departamento_usuario = d.id


drop table #all_user
select u.id as id_usuario, u.name,u.lastname,d.id as departamento_usuario,d.dependencia, u.type_user 
into #all_user
from users u,departamentos d
where u.departamento_usuario=d.id


SELECT * FROM #all_user,#my
where #all_user.departamento_usuario = #my.dependencia --evaluador de nuestro jefe


SELECT * FROM #all_user,#my
where #all_user.dependencia = #my.id_departamento --los que dependen de nuestro departamento


SELECT * FROM #all_user,#my
where #all_user.dependencia = #my.id_departamento 
and #all_user.type_user = 1 --los que dependen de nuestro departamento jefes
--SELECT * FROM #my    

*/





        

//        esta consulta sirve para evaluarse de acuerdo a el tipo de usuario. 

        $myUsers = Auth::id();
        $type_User = Auth::user()->type_user;
        $midepa = Auth::user()->departamento_usuario;



        if ($type_User == 1) {

            $evaluados = User::all()->where('departamento_usuario', '=', $midepa);
        } else

        if ($type_User == 2) {

            $evaluados = User::all()->where('id', '=', $myUsers);
            //return $evaluados;
        }






        $seccion = seccion_pregunta::where('id_encuesta', '=', $request->id_encuesta)->get();

        $pregunta = pregunta::orderBy('pregunta.id', 'ASC')

            ->select('seccion.nombre_seccion', 'pregunta.id_seccion', 'seccion.id_encuesta', 'pregunta.id', 'pregunta.nombre_pregunta', 'pregunta.descripcion_pregunta')

            ->join('seccion', 'seccion.id', '=', 'pregunta.id_seccion')

            ->join('encuestas', 'encuestas.id_encuesta', '=', 'seccion.id_encuesta')

            ->where('encuestas.id_encuesta', '=', $request->id_encuesta)

            ->get();

        return view('responder_encuesta', compact('seccion', 'pregunta', 'myUsers', 'evaluados'));
    }


    public function calificaciones(Request $request)
    {

        // return $request;
        //$request->comentario_pregunta;

//aca traemos los valores de la vista para llenarlos a la base de datos

        $myUser = Auth::id();

        try {





            for ($i = 0; $i <= count($request->comentario_pregunta); $i++) {



                if (isset($request['calificacion_' . $i])) {


                    $pregunta = new calificaciones();
                    $pregunta->id_pregunta = $request->id[$i];
                    $pregunta->id_usuario  = $myUser;
                    $pregunta->nota_calificacion = $request['calificacion_' . $i];
                    $pregunta->comentario_calificacion = $request->comentario_pregunta[$i];
                    $pregunta->id_evaluado = $request->t_evaluar;
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
                $comentario->id_evaluado = $request->t_evaluar;
                $comentario->save();
                //print  response()->json($valor);

            }




            // return 'fin';


            return back()->with('flash', 'Se ha respondido correctamente');

            //    $calificacion->save();

            //    return response()->json($pregunta);
        } catch (\Throwable $th) {
        }
    }
}
