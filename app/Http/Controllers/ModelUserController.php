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
    const PAGINACION = 10;

    public function index(Request $request)
    {
       //aca buscamos a las personas ya sea por su nombre y/o apellido.

      try {
        $buscarpor = $request->get('buscarpor');

if(isset($buscarpor)){
  $buscarpor = $request->get('buscarpor');
  $usuarios = DB::table('users')
  ->join('genero', 'genero.id_genero', '=', 'users.gender')
  ->join('departamentos', 'departamentos.id', '=', 'users.departamento_usuario')
  ->join('tipo_usuario', 'tipo_usuario.id_tipo_usuario', '=' ,'users.type_user')
  ->select('users.id','users.lastname', 'users.name', 'users.created_at', 'users.password', 'users.email','users.gender' ,'genero.nombre_genero', 'users.type_user', 'tipo_usuario.nombre_usuario','departamentos.nombre_departamento' )
  ->where('name', 'like', '%' . $buscarpor . '%'  )->orWhere('lastname', 'like', '%' . $buscarpor . '%'  )->paginate($this::PAGINACION);
}else{

      
//y aca ordenamos a los usuarios.

  $usuarios = User::orderBy('users.id','ASC')
  ->join('departamentos', 'departamentos.id', '=', 'users.departamento_usuario')
  ->join('genero', 'genero.id_genero', '=', 'users.gender')
  ->join('tipo_usuario', 'tipo_usuario.id_tipo_usuario', '=' ,'users.type_user')
  ->select('users.id','users.lastname', 'users.name', 'users.created_at', 'users.password', 'users.email','users.gender' ,'genero.nombre_genero', 'users.type_user', 'tipo_usuario.nombre_usuario','departamentos.nombre_departamento' )
  ->get();
  
  
}
//estos son los select que se encuentran en los modals.

$departamentos = Departamento::all();
$generos = genero::all();
$type_users = typeUser::all();
     
         return view('usuarios',compact('usuarios','generos','buscarpor','type_users', 'departamentos'));

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
        //aca creamos a los usuarios  cabe recalcar que esto tambien esta validado por parte de ajax public/js
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
                 }
           
            
            $usuario = new User();
            $usuario->departamento_usuario = $request->departamento_usuario;
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
//aca recuperamos el id del usuario.
$users=User::find($id);
return response()->json($users);



}

public function updateUsers(Request $request){

  //por otra parte aca podemos editar el registro del usuario  cabe recalcar que esto tambien esta validado por parte de ajax public/js
  //ademas falta validar el cambio de contraseña

            try {

              $usuario = User::find($request->id);
              if ($usuario == null) {

                return ['message' => 'Usuario no encontrado', 'type' => 'error'];

              } else 

              if (!isset($request->name)) {
                return ['message' => 'Debe ingresar nombre', 'type' => 'error'];
              } else
              if (!isset($request->lastname)) {
                return ['message' => 'Debe ingresar apellido', 'type' => 'error'];
              }


         
              $usuario->name = $request->name;
              $usuario->lastname = $request->lastname;
              
              $usuario->created_at = now();
              $usuario->updated_at = now();
              
              $usuario->save();
              
        // return ['message' => 'Usuario Actualizado', 'type' => 'success'];
              return response()->json( $usuario);
              
              
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
    } else 
  
      if (!isset($request->password)) {
        return ['message' => 'Debe ingresar contraseña', 'type' => 'error'];
      } else
      if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $request->password)) {
        return ['message' => 'Contraseña debe Contener: Mayúsculas, números y mas de 8 carácteres', 'type' => 'error'];
      } else
      if ($request->password != $request->confpassword) {
        return ['message' => 'Contraseñas no coinciden', 'type' => 'error'];
      } 

        $users->password  = bcrypt($request->password);
        $users->save();

        return response()->json( $users);
        // return ['message' => 'Contraseña Actualizada', 'type' => 'success'];
      
    
  } catch (\Throwable $th) {
    return response()->json( $th);
  }

 
}



public function deleteUsuario($id){
$usuario=User::find($id);
$usuario->delete();
$usuarios_actualizado = User::all();
return $usuarios_actualizado; 

//return response()->json(['success'=>'el usuario ha sido borrado correctamente']);




}


public function type_user(){
   
  




}


// public function selectGenero(){
     
      
    
//   $usuario = genero::all();
//  return view('usuarios', compact($usuario));


//   }



}
