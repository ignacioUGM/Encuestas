<?php

use App\Http\Controllers\departamentoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelUserController;

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
    return view('welcome');
});




Route::get('encuestas', function(){
    return view('encuestas');
})->name('encuesta');


Route::get('historial', function(){
    return view('historial');
})->name('historial');




Route::get('notificaciones', function(){
    return view('notificaciones');
})->name('notificaciones');


//rutas de usuarios
Route::get('usuarios',[ModelUserController::class, 'index'])->name('usuarios');
Route::get('usuarios',[ModelUserController::class, 'buscar'])->name('usuarios');
Route::get('add-users',[ModelUserController::class,'addUsers'])->name('add_users');


//ruta del departamento
Route::get('departamento',[departamentoController::class, 'index'])->name('departamento');
Route::get('add-departamento',[departamentoController::class,'agregarDepartamento']);




//rutas del auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 


//prueba    
// Route::resource('usuario', [ModelUserController::class,'addUsers']);