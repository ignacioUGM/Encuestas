<?php

use App\Http\Controllers\asignarEncuesta;
use App\Http\Controllers\asignarEncuestaController;
use App\Http\Controllers\departamentoController;
use App\Http\Controllers\encuestaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelUserController;
use App\Http\Controllers\preguntasController;
use App\Models\encuesta;
use Illuminate\Database\Eloquent\Model;
use Monolog\Handler\RotatingFileHandler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});




//historial



Route::get('historial', function(){
    return view('historial');
})->name('historial');



//notificaciones
Route::get('notificaciones', function(){
    return view('notificaciones');
})->name('notificaciones');






//asiginar
Route::get('usuarios2',[asignarEncuestaController::class,'index']);



//rutas preguntas
Route::get('preguntas',[preguntasController::class,'index'])->name('preguntas');
Route::get('add-pregunta',[preguntasController::class,'addPregunta']);
Route::get('recuperar-pregunta/{id}',[preguntasController::class,'getPreguntaId']);                                                  
Route::put('update-pregunta',[preguntasController::class,'editarPreguntas']);
Route::delete('delete-pregunta/{id}',[preguntasController::class,'deletePregunta']);




//rutas encuestas
Route::get('encuesta',[encuestaController::class,'index'])->name('encuesta');
Route::get('add-encuesta',[encuestaController::class,'addEncuesta']);
Route::get('recuperar-encuesta',[encuestaController::class,'recuperarEncuesta']);


//rutas de usuarios
Route::get('usuarios',[ModelUserController::class,'index'])->name('usuarios');
//Route::get('usuarios-buscar',[ModelUserController::class,'buscar'])->name('usuarios-buscar');
Route::get('add-users',[ModelUserController::class,'addUsers']);
Route::delete('delete-users/{id}',[ModelUserController::class,'deleteUsuario']);
Route::get('edit-users/{id}',[ModelUserController::class,'getUsersId']);
Route::put('update-users',[ModelUserController::class,'updateUsers']);
// Route::get('edit-contraseña/{id}',[ModelUserController::class,'getContraseñaId']);
Route::put('change-password',[ModelUserController::class,'changePass']);


//ruta del departamento
Route::get('departamento',[departamentoController::class, 'index'])->name('departamento');
Route::get('add-departamento',[departamentoController::class,'agregarDepartamento']);
Route::get('edit-departamento/{id}',[departamentoController::class,'getDepartamentoId']);
Route::put('update-departamento',[departamentoController::class,'updateDepartamento']);
Route::delete('delete-departamento/{id}',[departamentoController::class,'deleteDepartamento']);

//rutas del auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 