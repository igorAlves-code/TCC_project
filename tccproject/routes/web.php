<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\enviromentsController;
use App\Http\Controllers\equipmentsController;
use App\Http\Controllers\managementsController;
use App\Http\Controllers\teachersController;
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
Route::get('/logout', [userControl::class, 'logout'])->name("auth.log");



 Route::get('coordenacao/agendar', function () {
        return view('admin/agendar');
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

/* CRUD PROFESSORES*/
Route::get('coordenacao/teachers', [teachersController::class, 'index'])->name('admin.teachers.index');
Route::post('coordenacao/teachers/store', [teachersController::class, 'store'])->name('admin.teachers.store');
Route::patch('coordenacao/teachers/{id}/update/', [teachersController::class, 'update'])->name('admin.teachers.update');
Route::delete('coordenacao/teachers/{id}', [teachersController::class, 'destroy'])->name('admin.teachers.destroy');


/* CRUD COORDENACAO*/
Route::get('coordenacao/managements', [managementsController::class, 'index'])->name('admin.managements.index');
Route::post('coordenacao/managements/store', [managementsController::class, 'store'])->name('admin.managements.store');
Route::patch('coordenacao/managements/{id}/update/', [managementsController::class, 'update'])->name('admin.managements.update');
Route::delete('coordenacao/managements/{id}', [managementsController::class, 'destroy'])->name('admin.managements.destroy');

/* CRUD EQUIPAMENTOS*/
Route::get('coordenacao/equipments', [equipmentsController::class, 'index'])->name('admin.equipments.index');
Route::post('coordenacao/equipments/store', [equipmentsController::class, 'store'])->name('admin.equipments.store');
Route::patch('coordenacao/equipments/{id}/update/', [equipmentsController::class, 'update'])->name('admin.equipments.update');
Route::delete('coordenacao/equipments/{id}', [equipmentsController::class, 'destroy'])->name('admin.equipments.destroy');


Route::resource('ocorrencia', ContactController::class);
