<?php

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
    return view('index');
})->name('inicio');

Route::get ('/iniciar', [App\Http\Controllers\controllerQuiz::class,'index']) -> name ('iniciar');
Route::post ('/dadosPagina1', [App\Http\Controllers\controllerQuiz::class, 'dadosPagina1']) -> name ('dadosPagina1');
Route::post ('/dadosPagina2', [App\Http\Controllers\controllerQuiz::class, 'dadosPagina2']) -> name ('dadosPagina2');
Route::post ('/dadosPagina3', [App\Http\Controllers\controllerQuiz::class, 'dadosPagina3']) -> name ('dadosPagina3');
Route::post ('/dadosPagina4', [App\Http\Controllers\controllerQuiz::class, 'dadosPagina4']) -> name ('dadosPagina4');
Route::post ('/dadosPagina5', [App\Http\Controllers\controllerQuiz::class, 'dadosPagina5']) -> name ('dadosPagina5');

/*
Route :: get ('/perguntas',[App\Http\Controllers\controllerQuiz :: class , 'index']) -> name ('inicio');
Route :: get ('/perguntas ',[App\Http\Controllers\controllerQuiz :: class , 'create']) -> name ('inicio');
Route :: get ('/perguntas ',[App\Http\Controllers\controllerQuiz :: class , 'index']) -> name ('inicio');
Route :: get ('/perguntas ',[App\Http\Controllers\controllerQuiz :: class , 'index']) -> name ('inicio');
Route :: get ('/perguntas ',[App\Http\Controllers\controllerQuiz :: class , 'index']) -> name ('inicio');
*/