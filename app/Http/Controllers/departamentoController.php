<?php

namespace App\Http\Controllers;


use App\Models\Departamento;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class departamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamento= Departamento::orderBy('id_departamento','DESC')->get();
        return view('departamento',compact('departamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function agregarDepartamento(Request $request ){
      
        try {
               
            $departamento = new Departamento();
            $departamento->nombre_departamento = $request->nombre_departamento;
            $departamento->descripcion_departamento = $request->descripcion_departamento;
     
            $departamento->created_at = now();
            $departamento->save();
            return response()->json($departamento);
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
    public function destroy(Departamento $departamento)
    {
        //
    }
}
