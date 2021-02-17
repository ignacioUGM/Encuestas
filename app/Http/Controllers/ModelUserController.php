<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\genero;
use App\Models\typeUser;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ModelUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    const PAGINACION = 15;

    public function index(Request $request)
    {

      try {
        $buscarpor = $request->get('buscarpor');

if(isset($buscarpor)){
  $buscarpor = $request->get('buscarpor');
  $usuarios = DB::table('users')->where('name', 'like', '%' . $buscarpor . '%'  )->orWhere('lastname', 'like', '%' . $buscarpor . '%'  )->paginate($this::PAGINACION);
}else{
  $usuarios = User::orderBy('id','DESC')->join('genero', 'genero.id_genero', '=', 'users.gender', 'users')->join('tipo_usuario', 'tipo_usuario.id_tipo_usuario', '=' ,'users.type_user')->join('departamentos', 'departamentos.id', '=' ,'users.departamento_usuario')
  ->select('users.lastname','genero.nombre_genero', 'users.name','users.gender', 'users.created_at', 'users.password', 'users.email', 'users.type_user', 'tipo_usuario.nombre_usuario', 'users.departamento_usuario', 'departamentos.nombre_departamento')
  ->get();
}
     
        $departamentos = Departamento::all();
        $generos = genero::all();
        $type_users = typeUser::all();

     //   return $usuarios;
         return view('usuarios',compact('usuarios','generos','buscarpor','type_users','departamentos'));

      } catch (\Throwable $th) {
        return print $th->getMessage();
      }
    }

    // public function buscar(Request $request)
    // {

    //     $buscarpor = $request->get('buscarpor');
    //     $usuarios = DB::table('users')->where('name', 'like', '%' . $buscarpor . '%'  )->paginate($this::PAGINACION);
    //     return view('usuarios',compact('usuarios', 'buscarpor'));
    // }



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
                return ['message' => 'Debe ingresar apellido', 'type' => 'error'];
              

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
              
               else 
                 if(!isset($request->gender)){
                 return ['message'=> 'Debe ingresar el genero', 'type'=>'error'];
                 } 
                 else
                 if(!isset($request->type_user)){
                 return ['message'=> 'Debe ingresar el tipo de usuario', 'type'=>'error'];
                

                 }else
                  {
           
            
            $usuario = new User();
            $usuario->gender = $request->gender;
            $usuario->type_user = $request->type_user;
            $usuario->name = $request->name;
            $usuario->lastname = $request->lastname;
            $usuario->email = $request->email;
            $usuario->password = bcrypt($request->password);
            $usuario->created_at = now();
            $usuario->updated_at = now();
            
            $usuario->save();

       
           return response()->json($usuario);
          //  return ['message' => 'Usuario Creado correctamente', 'type' => 'success'];
        
           //return response()->json(['success'=>'el usuario ha sido registrado correctamente']);
          // return view('usuarios',compact('usuarios'));
           
      }

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
    public function edit($id)
    {
        // $users=User::findOrFail($id);
        // return $users;
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
    public function destroy(User $users)
    {
    //    $users->delete();
    //     return redirect()->route('usuarios');
    }



public function getUsersId($id){

$users=User::find($id);
return response()->json($users);



}

public function updateUsers(Request $request){
            try {

              $usuario = User::find($request->id);
              if ($usuario == null) {

                return ['message' => 'Usuario no encontrado', 'type' => 'error'];

              } else {

              if (!isset($request->name)) {
                return ['message' => 'Debe ingresar nombre', 'type' => 'error'];
              } else
              if (!isset($request->lastname)) {
                return ['message' => 'Debe ingresar apellido', 'type' => 'error'];
              }else{


         
              $usuario->name = $request->name;
              $usuario->lastname = $request->lastname;
              
              $usuario->created_at = now();
              $usuario->updated_at = now();
              
              $usuario->save();
              
        // return ['message' => 'Usuario Actualizado', 'type' => 'success'];
              return response()->json( $usuario);
              }
              }
            } catch (\Throwable $th) {

              return response()->json( $th);
            
            }
}



public function getContraseñaId($id){

  $users=User::find($id);
  return response()->json($users);
  
  
  
  }


public function changePass(Request $request)
{

  try {
    $users = User::findOrFail($request->id);
    if ($users == null) {
  
      return ['message' => 'Usuario no encontrado', 'type' => 'error'];
    } else {
  
      if (!isset($request->password)) {
        return ['message' => 'Debe ingresar contraseña', 'type' => 'error'];
      } elseif (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $request->password)) {
        return ['message' => 'Contraseña debe Contener: Mayúsculas, números y mas de 8 carácteres', 'type' => 'error'];
      } elseif ($request->password != $request->confpassword) {
        return ['message' => 'Contraseñas no coinciden', 'type' => 'error'];
      } else {

        $users->password  = bcrypt($request->password);
        $users->save();

        return response()->json( $users);
        // return ['message' => 'Contraseña Actualizada', 'type' => 'success'];
      }
    }
  } catch (\Throwable $th) {
    return response()->json( $th);
  }

 
}



public function deleteUsuario($id){
$usuario=User::find($id);
$usuario->delete();
return response()->json(['success'=>'el usuario ha sido borrado correctamente']);




}


public function type_user(){
   
  




}


// public function selectGenero(){
     
      
    
//   $usuario = genero::all();
//  return view('usuarios', compact($usuario));


//   }



}
