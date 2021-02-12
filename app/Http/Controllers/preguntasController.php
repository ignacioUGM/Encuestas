<?php

namespace App\Http\Controllers;

use App\Models\encuesta;
use App\Models\pregunta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class preguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        // $preguntas=DB::table('encuestas','pregunta')->select('encuestas.id_encuesta','pregunta.nombre_pregunta','pregunta.descripcion_pregunta','pregunta.id_pregunta')->where('encuestas.id_encuesta', '=', 'pregunta.id_encuesta')->get();
        $preguntas=pregunta::orderBy('id_pregunta','ASC')
            ->select('id_encuesta', 'id_pregunta', 'nombre_pregunta', 'descripcion_pregunta')

            ->where('id_encuesta', '=', $request->id_encuesta)->get();

        return view('preguntas', compact('preguntas'));
        // ->get();
        // return view('preguntas', compact('pregunta'));
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
            } else {


                $preguntas = new pregunta();
                $preguntas->nombre_pregunta = $request->nombre_pregunta;
                $preguntas->descripcion_pregunta = $request->descripcion_pregunta;
                $preguntas->updated_at = now();
                $preguntas->created_at = now();
                

            //       return $preguntas;

                  $preguntas->save();
            }

            return response()->json($preguntas);
        } catch (\Throwable $th) {

            return response()->json($th);
        }
    }


    public function getencuestaId($id_encuesta){

        $preguntas=pregunta::find($id_encuesta);
        return response()->json($preguntas);
        
        
        
        }
        
}
