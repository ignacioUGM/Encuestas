<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Contracts\Service\Attribute\Required;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator, Redirect, Response;
use Session;


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

        //       $rules = [

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

            $usuario = new User();
            $usuario->name = $request->name;
            $usuario->lastname = $request->lastname;
            $usuario->email = $request->email;
            

            $usuario->password = bcrypt($request->password);
            $usuario->created_at = now();
            $usuario->updated_at = now();
         
            $usuario->save();

            // return ['message' => 'Usuario Creado', 'type' => 'success'];
           return response()->json($usuario);
        //    return back()->with('estado','El producto fue agregado con éxito');
    //   }

      } catch (\Throwable $th) {
            return response()->json($th);
            // return ['message' => $th->getMessage(), 'type' => 'error'];

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

        // DB::table('users')->insert([
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
    public function edit($id)
    {
        $usuario = DB::table('users')->where('id', $id)->first();
        return view('modal.modalUsuario.blade', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModelUser  $modelUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

       
        $rules = [

            'name' =>'required|string|max:20',
            'lastname' =>'required|string|max:20',
  

        ];
        $messages = [


            'name.required' => 'El nombre es obligatorio',
            'name.string' => 'El nombre debe ser alfanumerico',
            'name.max' => 'El nombre no puede exceder los 20 caracteres',
            // 'email.required' => 'El correo es obligatorio',
            // 'email.string' => 'la dirrecion del correo deber ser alfanumerico',
            // 'email.max' => 'la direccion del correo no debe superar los 30 caracteres',
            'lastname.required' => 'el apellido debe ser obligatorio',
            'lastname.string' => 'el apellido debe ser alfanumerico',
            'lastname.max' => 'el apellido no debe superar los 20 caracteres',
            // 'password.required' => 'la contraseña es obligatoria',
            // 'password.min' => 'el apellido debe tener un minimo de 8 caracteres',
            // 'password.max' => 'la contraseña no debe superar los 20 caracteres',
        ];

        $this->addUsers($request, $rules, $messages);

        $producto = DB::table('users')->where('id', $id)->update($request->only('name','lastname'));
        //$producto = DB::table('producto')->where('codigo', $codigo)->update($request->all());
        //$producto = DB::table('producto')->where('codigo', $codigo)->update($request->except('_token','_method'));
        return back()->with('estado','El registro ha sido actualizado con exito');


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
