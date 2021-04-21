<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\pregunta;
use App\Models\seccion_pregunta;
use App\Models\User;
use App\Models\usuario_encuesta;
use Illuminate\Http\Request;


class preguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
     

         try {
          
            $departamentos = Departamento::all();
            // $preguntas=pregunta::orderBy('id','ASC')
            // ->select('id_encuesta', 'id', 'nombre_pregunta', 'descripcion_pregunta' )

            // ->where('id_encuesta','=', $request->id_encuesta)->get();
           
            $seccion = seccion_pregunta::all();

            $preguntas=pregunta::orderBy('pregunta.id','ASC')
            ->select('seccion.nombre_seccion','seccion.id_encuesta','pregunta.id','pregunta.nombre_pregunta', 'pregunta.descripcion_pregunta', 'seccion.id', 'pregunta.id_seccion')

            ->join('seccion','seccion.id','=','pregunta.id_seccion')

            ->where('seccion.id_encuesta','=', $request->id_encuesta)->get();
                      
           


        return view('preguntas',compact('preguntas','departamentos','seccion'));

         } catch (\Throwable $th) {
             
            return print $th->getMessage();



         }
        

      
    }



    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(pregunta $pregunta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(pregunta $pregunta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pregunta $pregunta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(pregunta $pregunta)
    {
        //
    }
    public function addPregunta(Request $request)
    {

        try {

            if (!isset($request->nombre_pregunta)) {
                return ['message' => 'error... Debe ingresar el nombre de la pregunta', 'type' => 'error'];
            } else
            
            if (!isset($request->descripcion_pregunta)) {
                return ['message' => 'error... Debe ingresar la descripcion de la pregunta', 'type' => 'error'];
            } 


                $preguntas = new pregunta();
                
                $preguntas->nombre_pregunta = $request->nombre_pregunta;
                $preguntas->descripcion_pregunta = $request->descripcion_pregunta;
                $preguntas->id_seccion = $request->id_seccion;
                $preguntas->updated_at = now();
                $preguntas->created_at = now();
            
                

            //       return $preguntas;

                  $preguntas->save();
            

            return response()->json($preguntas);
        } catch (\Throwable $th) {

            return response()->json($th);
        }
    }


    public function getPreguntaId($id){

        $preguntas=pregunta::find($id);
        return response()->json($preguntas);
        
        
        }




    public function editarPreguntas(Request $request){


        try {

            $preguntas = pregunta::find($request->id);
            if ($preguntas == null) {

              return ['message' => 'Pregunta no encontrada', 'type' => 'error'];

            } else 

            if (!isset($request->nombre_pregunta)) {
              return ['message' => 'Debe ingresar el nombre de la pregunta', 'type' => 'error'];
            } else
            if (!isset($request->descripcion_pregunta)) {
              return ['message' => 'Debe ingresar la descripcion de la pregunta', 'type' => 'error'];
            }

       
            $preguntas->nombre_pregunta = $request->nombre_pregunta;
            $preguntas->descripcion_pregunta = $request->descripcion_pregunta;
            
            $preguntas->created_at = now();
            $preguntas->updated_at = now();
            
            $preguntas->save();
            
      // return ['message' => 'Usuario Actualizado', 'type' => 'success'];
            return response()->json( $preguntas);
            
            
          } catch (\Throwable $th) {

            return response()->json( $th);
          
          }
}




public function deletePregunta($id){
    $preguntas=pregunta::find($id);
    $preguntas->delete();

    
    return response()->json(['success'=>'la pregunta ha sido borrado correctamente']);
     
   

    }

    

    public function asignarDepartamento(Request $request){
 

       // return $request;

        $usuarios2 = User::orderBy('users.id', 'ASC')
        ->join('departamentos', 'departamentos.id', '=', 'users.departamento_usuario')
        ->join('genero', 'id_genero', '=', 'users.gender')
        ->join('tipo_usuario', 'tipo_usuario.id_tipo_usuario', '=' ,'users.type_user')
        ->select('users.id', 'name', 'lastname', 'nombre_genero','email','nombre_departamento','nombre_usuario')
        ->where('departamentos.id','=', $request->departamento)->get();

       
    
        

        return view('usuarios2',compact('usuarios2'));
    }



    public function asignarUsuario(Request $request){
        

        // return $request;

    //   return $request->asignacion;

          
       $asignaciones=$request->asignacion;
    
        // Seteamos las propiedades

     //   dd($asignaciones);

     try {
         
    


        foreach($asignaciones as $indice => $asigna){

            $usuario_encuesta = new usuario_encuesta();
            $usuario_encuesta->id_usuario  = $asigna;
            $usuario_encuesta->id_encuesta = $request->id_encuesta;
            $usuario_encuesta->created_at = now();
            $usuario_encuesta->updated_at = now();
            $usuario_encuesta->estado_encuesta = 1;
            $usuario_encuesta->save();

            return view('notificaciones');

        }
     } catch (\Throwable $th) {
        return response()->json($th);
     }



        //dd($usuario_encuesta);


        

        // Guardamos en la base de datos (equivalente al flush de Doctrine)
      // $usuario_encuesta->save();
        
      // return $usuario_encuesta;
        


//     return request()->all();


    }
    
  
          
           
      





    }
        


