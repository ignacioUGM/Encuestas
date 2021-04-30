<?php

namespace App\Http\Controllers;


use App\Models\Departamento;

use Illuminate\Http\Request;


class departamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            //aca recuperamos todos los departamentos

        $departamentos = Departamento::orderBy('departamentos.id','ASC')
        // ->select('departamentos.id', 'departamentos.nombre_departamento', 'b.dependencia', 'departamentos.descripcion_departamento', 'departamentos.created_at')
        // ->join('departamentos as  b',  'b.id', '=', 'departamentos.id') 
        // ->join('departamentos.dependencia','=','departamentos.nombre_departamento')       
        // ->where('departamentos.dependencia','=','departamento.id')
   
      

        ->get();

        return view('departamento', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function agregarDepartamento(Request $request)
    {

        //aca creamos departamentos...

        try {

             

            if (!isset($request->nombre_departamento)) {
                return ['message' => 'error... Debe ingresar el nombre del departamento', 'type' => 'error'];
            } else
            
            if (!isset($request->descripcion_departamento)) {
                return ['message' => 'error... Debe ingresar la descripcion del departamento', 'type' => 'error'];
            } 


             

                

                $departamentos = new Departamento();
                $departamentos->nombre_departamento = $request->nombre_departamento;
                $departamentos->descripcion_departamento = $request->descripcion_departamento;
                $departamentos->dependencia = $request->dependencia;
                $departamentos->created_at = now();
                $departamentos->save();
            

            return response()->json($departamentos);
        } catch (\Throwable $th) {

            return response()->json($th);
        }
    }


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
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departamento $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departamento $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departamento $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamentos)
    {
        //
    }


    public function getDepartamentoId($id)
    {

        //aca recuperamos el id del departamento para asi poder editarlo y eliminarlo
     
    $departamentos=Departamento::find($id);
    return response()->json($departamentos);
     
        //codigo funcional sin find
        // $departamentos = Departamento::where('id_departamento', '=', $id_departamento)->get();

        // return $departamentos;

        // return response()->json($departamentos);
    }

    public function updateDepartamento(Request $request)
    {
             
        //aca actualizamos el departamento

        try {

            $departamentos = Departamento::find($request->id);

            if ($departamentos == null) {
            }else
            if (!isset($request->nombre_departamento)) {
                return 'ingrese nombre departamento';
            } else if (!isset($request->descripcion_departamento)) {
                return 'ingrese descripcion departamento';
            }
            

            $departamentos->nombre_departamento = $request->nombre_departamento;
            $departamentos->descripcion_departamento = $request->descripcion_departamento;

            $departamentos->created_at = now();
            $departamentos->updated_at = now();
            $departamentos->save();
             return response()->json($departamentos);
         //   return $request;
            
        
            
        } catch (\Throwable $th) {

            return 'error :' . $th->getMessage();
            //  return response()->json($th);
        }
    }

    public function deleteDepartamento($id)
    {
      
      //por otro lado aca borramos al departamento.

        $departamentos = Departamento::find($id);
        $departamentos->delete();
        $departamento_actualizado = Departamento::all();
        return $departamento_actualizado;
        // return response()->json(['success' => 'el departamento ha sido borrado correctamente']);
    }
}
