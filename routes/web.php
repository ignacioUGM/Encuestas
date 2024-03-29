<?php

use App\Http\Controllers\asignarEncuestaController;
use App\Http\Controllers\departamentoController;
use App\Http\Controllers\encuestaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelUserController;
use App\Http\Controllers\preguntasController;
use App\Http\Controllers\usuario_encuesta;
use Illuminate\Routing\RouteUri;

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


Route::get('declaracion', function(){
    return view('declaracion');
})->name('declaracion')->middleware('auth');



//historial

Route::get('historial', function(){
    return view('historial');
})->name('historial')->middleware('auth');



//notificaciones
Route::get('notificaciones', function(){
    return view('notificaciones');
})->name('notificaciones')
->middleware('auth');





Route::get('encuesta_usuario',[asignarEncuestaController::class,'usuario_encuesta'])->name('responder')->middleware('auth');
Route::get('recuperar_encuesta',[asignarEncuestaController::class,'recuperarEncuesta'])->middleware('auth');
Route::post('recuperar_encuesta',[asignarEncuestaController::class,'recuperarEncuesta'])->middleware('auth');
Route::get('responder_encuesta',[asignarEncuestaController::class,'responder_encuesta'])->middleware('auth');
Route::post('responder_encuesta',[asignarEncuestaController::class,'responder_encuesta'])->middleware('auth');
Route::get('calificaciones',[asignarEncuestaController::class,'calificaciones'])->middleware('auth');
Route::post('calificaciones',[asignarEncuestaController::class,'calificaciones'])->middleware('auth');


//asiginar
Route::get('usuarios2',[preguntasController::class,'asignarEncuesta'])->middleware('auth');
Route::post('usuarios2',[preguntasController::class,'asignarEncuesta'])->middleware('auth');
Route::post('asignarUsuario',[preguntasController::class,'asignarUsuario'])->middleware('auth');
Route::get('asignarUsuario',[preguntasController::class,'asignarUsuario'])->middleware('auth');



//rutas preguntas
Route::get('preguntas',[preguntasController::class,'index'])->name('preguntas')->middleware('auth');
Route::get('add-pregunta',[preguntasController::class,'addPregunta'])->middleware('auth');
Route::get('recuperar-pregunta/{id}',[preguntasController::class,'getPreguntaId'])->middleware('auth');                                                  
Route::put('update-pregunta',[preguntasController::class,'editarPreguntas'])->middleware('auth');
Route::delete('delete-pregunta/{id}',[preguntasController::class,'deletePregunta'])->middleware('auth');




//rutas encuestas
Route::get('encuesta',[encuestaController::class,'index'])->name('encuesta')->middleware('auth');
Route::get('add-encuesta',[encuestaController::class,'addEncuesta'])->middleware('auth');
Route::get('recuperar-encuesta',[encuestaController::class,'recuperarEncuesta'])->middleware('auth');
Route::get('usuarios2',[preguntasController::class,'asignarDepartamento']);
Route::post('usuarios2',[preguntasController::class,'asignarDepartamento']);


//rutas de usuarios
Route::get('usuarios',[ModelUserController::class,'index'])->name('usuarios')->middleware('auth');
Route::get('add-users',[ModelUserController::class,'addUsers'])->middleware('auth');
Route::delete('delete-users/{id}',[ModelUserController::class,'deleteUsuario'])->middleware('auth');
Route::get('edit-users/{id}',[ModelUserController::class,'getUsersId'])->middleware('auth');
Route::put('update-users',[ModelUserController::class,'updateUsers'])->middleware('auth');
Route::put('change-password',[ModelUserController::class,'changePass'])->middleware('auth');


//ruta del departamento
Route::get('departamento',[departamentoController::class, 'index'])->name('departamento')->middleware('auth');
Route::get('add-departamento',[departamentoController::class,'agregarDepartamento'])->middleware('auth');
Route::get('edit-departamento/{id}',[departamentoController::class,'getDepartamentoId'])->middleware('auth');
Route::put('update-departamento',[departamentoController::class,'updateDepartamento'])->middleware('auth');
Route::delete('delete-departamento/{id}',[departamentoController::class,'deleteDepartamento'])->middleware('auth');

//rutas del auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 