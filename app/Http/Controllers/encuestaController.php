<?php

namespace App\Http\Controllers;

use App\Models\encuesta;
use Illuminate\Http\Request;
use App\Models\tipo_encuesta;
use Illuminate\Support\Facades\DB;

class encuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        try {
            // $encuestas = encuesta::orderBy('id_encuesta', 'ASC')->get();

       

            $tipo_encuestas = tipo_encuesta::all();
            $encuestas = encuesta::orderBy('id_encuesta', 'ASC')->join('tipo_encuestas', 'tipo_encuestas.id_tipo_encuesta', '=', 'encuestas.tipo_encuesta', 'encuestas')
            ->select('encuestas.id_encuesta','tipo_encuestas.nombre_tipo_encuesta', 'encuestas.nombre_encuesta','encuestas.tipo_encuesta', 'encuestas.created_at')
            ->get();
              return view('encuesta',compact('encuestas','tipo_encuestas'));
              
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
  
        //   $tipo_encuestas=DB::table('tipo_encuesta')->select('id_tipo_encuesta')
        //   ->get();
        //   return view("encuesta",["tipo_encuesta"=>$tipo_encuestas]);

        // $tipo_encuestas = tipo_encuesta::all();
        // return view('encuesta', compact('tipo_encuestas'));
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
     * @param  \App\Models\encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function show(encuesta $encuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(encuesta $encuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, encuesta $encuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(encuesta $encuesta)
    {
        //
    }


    public function addEncuesta(Request $request ){
         
        try {

            if (!isset($request->nombre_encuesta)){
                return ['message' => 'Debe ingresar nombre de la encuesta', 'type' => 'error'];
            }else

                if
                    (!isset($request->tipo_encuesta)){
                    return ['message' => 'Debe escoger el tipo de encuesta', 'type' => 'error'];



                } 


            $encuesta = new encuesta();
            $encuesta->nombre_encuesta = $request->nombre_encuesta;
            $encuesta->tipo_encuesta = $request->tipo_encuesta;
            $encuesta->created_at = now();
            $encuesta->updated_at = now();
            $encuesta->estado_encuesta = $request->estado_encuesta=(0);
            $encuesta->save();

        //    return $request;

           return response()->json($encuesta);
            
        } catch (\Throwable $th) {
            
            return response()->json($th);
        }
     

    }
   public function recuperarEncuesta(Request $request){

    $encuesta = DB::table('encuestas')->where('id_encuesta', $request->id_encuesta)->first();

 //   return  $request;
    return view('preguntas', compact('encuesta'));
 







   }


}
