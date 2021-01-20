<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Contracts\Service\Attribute\Required;

class ModelUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    const PAGINACION = 10;

    public function index()
    {
      //  $usuarios = DB::table('users')->get();
        //return view('usuarios', compact('usuarios'));
           $usuarios= User::orderBy('id','DESC')->get();
            return view('usuarios',compact('usuarios'));

    }

    public function buscar(Request $request)
    {

        $buscarpor = $request->get('buscarpor');
        $usuarios = DB::table('users')->where('name', 'like', '%' . $buscarpor . '%')->paginate($this::PAGINACION);
        return view('usuarios', compact('usuarios', 'buscarpor'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
     */



    public function addUsers(Request $request)
    {
    
        try {
            
            if (!isset($request->name)) {
                return ['message' => 'Debe ingresar nombre', 'type' => 'error'];
            }else
            
            if (!isset($request->lastname)) {
                return ['message' => 'Debe ingresar apellido4', 'type' => 'error'];
              

              } else
              
              if (!isset($request->email)) {
                return ['message' => 'Debe ingresar mail', 'type' => 'error'];
              } 
              
              
              else
              
              if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
                return ['message' => 'Formato mail no valido', 'type' => 'error'];
              } 
              else
              
              if (User::where('email', $request->email)->exists()) {
                return ['message' => 'Mail ya existe en los registros', 'type' => 'error'];
              } 
               else
               
               if (!isset($request->password)) {
                return ['message' => 'Debe ingresar contraseña', 'type' => 'error'];
              }
               else
               
               if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $request->password)) {
                return ['message' => 'Contraseña debe Contener: Mayúsculas, números y mas de 8 carácteres', 'type' => 'error'];
              }
              
               else {

          
            $usuario = new User();
            $usuario->name = $request->name;
            $usuario->lastname = $request->lastname;
            $usuario->email = $request->email;
            

            
            $usuario->password = bcrypt($request->password);
            $usuario->created_at = now();
            $usuario->updated_at = now();
            
            $usuario->save();

            return ['message' => 'Usuario Creado', 'type' => 'success'];
           return response()->json($usuario);
      }

      } catch (\Throwable $th) {
            return response()->json($th);
            return ['message' => $th->getMessage(), 'type' => 'error'];

        }
    }


    public function create()
    {
        // return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     





        // $rules = [

        //     'name' =>'required|string|max:20',
        //     'email' =>'required|string|max:30',
        //     'lastname' =>'required|string|max:20',
        //     'password' =>'required|string|max:20|min:8',

        // ];
        // $messages = [


        //     'name.required' => 'El nombre es obligatorio',
        //     'name.string' => 'El nombre debe ser alfanumerico',
        //     'name.max' => 'El nombre no puede exceder los 20 caracteres',
        //     'email.required' => 'El correo es obligatorio',
        //     'email.string' => 'la dirrecion del correo deber ser alfanumerico',
        //     'email.max' => 'la direccion del correo no debe superar los 30 caracteres',
        //     'lastname.required' => 'el apellido debe ser obligatorio',
        //     'lastname.string' => 'el apellido debe ser alfanumerico',
        //     'lastname.max' => 'el apellido no debe superar los 20 caracteres',
        //     'password.required' => 'la contraseña es obligatoria',
        //     'password.min' => 'el apellido debe tener un minimo de 8 caracteres',
        //     'password.max' => 'la contraseña no debe superar los 20 caracteres',
        // ];

        // $this->validate($request, $rules, $messages);

        // DB::table('producto')->insert([
        //   'name' => $request->name,
        //   'email' => $request->email,
        //   'lastname' => $request->lastname,
        //   'password' => $request->password,


        // ]);

        // return back()->with('estado','El usuario fue agregado correctamente');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelUser  $modelUser
     * @return \Illuminate\Http\Response
     */
    public function show(User $modelUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelUser  $modelUser
     * @return \Illuminate\Http\Response
     */
    public function edit(User $modelUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModelUser  $modelUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $modelUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelUser  $modelUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $modelUser)
    {
        // DB::table('usuario')->where('codigo',$codigo)->delete();
        // return back()->with('estado','El producto ha sido eliminado con exito');
    }
}
