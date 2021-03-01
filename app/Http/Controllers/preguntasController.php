<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\pregunta;
use App\Models\User;
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
           


            $preguntas=pregunta::orderBy('id','ASC')
            ->select('id_encuesta', 'id', 'nombre_pregunta', 'descripcion_pregunta' )

            ->where('id_encuesta','=', $request->id_encuesta)->get();
                      
            $departamentos = Departamento::all();


        return view('preguntas', compact('preguntas','departamentos'));

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
                return ['message' => 'error... Debe ingresar el nombre del departamento', 'type' => 'error'];
            } else
            
            if (!isset($request->descripcion_pregunta)) {
                return ['message' => 'error... Debe ingresar la descripcion del departamento', 'type' => 'error'];
            } 


                $preguntas = new pregunta();
                $preguntas->id_encuesta = $request->id_encuesta;
                $preguntas->nombre_pregunta = $request->nombre_pregunta;
                $preguntas->descripcion_pregunta = $request->descripcion_pregunta;
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

    public function asignarEncuesta(){





    }

    




    }
        


