<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\enviromentsController;
use App\Http\Controllers\userControl;

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

Route::get('/', [userControl::class, 'login'])->name("login.page");
Route::post('/', [userControl::class, 'auth'])->name("auth.user");


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
    return view('admin/index');
});


Route::get('coordenacao/agendar', function () {
    return view('admin/agendar');
});


Route::get('coordenacao/agendamentos', function () {
    return view('admin/agendamentos');
});

Route::get('coordenacao/teachers', function () {
    return view('admin/teachers');
});


Route::get('coordenacao/managements', function () {
    return view('admin/managements');
});


/* CRUD AMBIENTES */
Route::get('coordenacao/enviroments', [enviromentsController::class, 'index'])->name('admin.enviroments.index');
Route::post('coordenacao/enviroments/store', [enviromentsController::class, 'store'])->name('admin.enviroments.store');
Route::patch('coordenacao/enviroments/{id}/update/', [enviromentsController::class, 'update'])->name('admin.enviroments.update');
Route::delete('coordenacao/enviroments/{id}', [enviromentsController::class, 'destroy'])->name('admin.enviroments.destroy');


Route::get('coordenacao/equipments', function () {
    return view('admin/equipments');
});

Route::resource('ocorrencia', ContactController::class);
