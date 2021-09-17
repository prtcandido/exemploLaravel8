<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DepartamentoController;
use \App\Http\Controllers\FuncionarioController;

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
    return view('principal');  // <------------------------
});

//Route::get('/departamento',[DepartamentoController::class,'index']);

Route::resource('departamento',DepartamentoController::class);
Route::resource('funcionario',FuncionarioController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
