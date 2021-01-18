<?php

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


Route::get('departamento', function(){
    return view('departamento');
})->name('departamento');

/*Route::get('usuarios', function(){
    return view('usuarios');
})->name('usuarios');*/
Route::get('historial', function(){
    return view('historial');
})->name('historial');
Route::get('notificaciones', function(){
    return view('notificaciones');
})->name('notificaciones');
Route::get('auth.login', function(){
    return view('auth.login');
})->name('login');
Route::get('auth.register', function(){
    return view('auth.register');
})->name('register');
Route::get('prueba_bd', function(){
    return view('prueba_bd');
})->name('prueba');


Route::get('usuarios',[ModelUserController::class, 'index',])->name('usuarios');
Route::get('usuarios',[ModelUserController::class, 'buscar',])->name('usuarios');
// Route::get('create',[ModelUserController::class, 'store',]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
