<?php
use App\Http\Controllers\Raiz;
use App\Http\Controllers\Primos;
use App\Http\Controllers\Notas;
use App\Http\Controllers\Amigos;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/curso/{dato1}',[CursoController::class,'EsPrimo']);
//Route::get('/ruta3/{dato1}/{dato2}',[CursoController::class,'amigos']);

Route::get('formulario',[CursoController::class,'create']);
Route::post('formulario',[CursoController::class,'store'])->name('prueba.store');

Route::get('FormuPrimo',[Primos::class,'create']);
Route::post('FormuPrimo',[Primos::class,'store'])->name('Primos.store');

Route::get('formuAmigos',[Amigos::class,'create']);
Route::post('formuAmigos',[Amigos::class,'store'])->name('amigos.store');

Route::get('FormuNotas',[Notas::class,'create']);
Route::post('FormuNotas',[Notas::class,'store'])->name('Notas.store');

Route::get('FormuRaiz',[Raiz::class,'create']);
Route::post('FormuRaiz',[Raiz::class,'store'])->name('Raiz.store');
