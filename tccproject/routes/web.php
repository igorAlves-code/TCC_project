<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('login');
});


Route::get('agendar', function () {
    return view('/user/agendar');
});


Route::get('agendamentos', function () {
    return view('/user/agendamentos');
});


Route::get('alterarSenha', function () {
    return view('alterarSenha');
});


Route::get('coordenacao', function () {
    return view('coordenacao/index');
});


Route::get('coordenacao/teachers', function () {
    return view('coordenacao/teachers');
});


Route::get('coordenacao/managements', function () {
    return view('coordenacao/managements');
});


Route::get('coordenacao/enviroments', function () {
    return view('coordenacao/enviroments');
});


Route::get('coordenacao/equipments', function () {
    return view('coordenacao/equipments');
});

Route::resource('ocorrencia', ContactController::class);
