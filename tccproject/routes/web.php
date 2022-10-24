<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\enviromentsController;
use App\Http\Controllers\equipmentsController;
use App\Http\Controllers\managementsController;
use App\Http\Controllers\teachersController;
use App\Http\Controllers\userControl;
use App\Http\Controllers\siteController;



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

/* AUTENTICAÇÃO */
Route::get('/', [userControl::class, 'login'])->name("login.page");
Route::post('/', [userControl::class, 'auth'])->name("auth.user");
Route::get('/logout', [userControl::class, 'logout'])->name("auth.log");


/* MIDDLEWARE DE AUTENTICAÇÃO */
Route::middleware(['auth'])->group(function () {

Route::get('agendar', [siteController::class, 'agendar'])->name('Home');;

Route::get('agendamentos', [siteController::class, 'agendamentos']);

Route::resource('ocorrencia', ContactController::class);


/* CONTROLE DE ACESSO */


/* GRUPO DE ROTAS COORDENAÇÃO */
Route::prefix('coordenacao')->group(function () {

    Route::get('/', [siteController::class, 'coordenacao']);
   

    /* CRUD PROFESSORES */
    Route::prefix('teachers')->group(function () {
        Route::get('/', [teachersController::class, 'index'])->name('teachers.index');
        Route::post('/store', [teachersController::class, 'store'])->name('teachers.store');
        Route::patch('/{id}/update/', [teachersController::class, 'update'])->name('teachers.update');
        Route::delete('/{id}', [teachersController::class, 'destroy'])->name('teachers.destroy');
    });

    /* CRUD COORDENAÇÃO */
    Route::prefix('managements')->group(function () {
        Route::get('/', [managementsController::class, 'index'])->name('managements.index');
        Route::post('/store', [managementsController::class, 'store'])->name('managements.store');
        Route::patch('/{id}/update/', [managementsController::class, 'update'])->name('managements.update');
        Route::delete('/{id}', [managementsController::class, 'destroy'])->name('managements.destroy');
    });

    /* CRUD AMBIENTES */
    Route::prefix('enviroments')->group(function () {
        Route::get('/', [enviromentsController::class, 'index'])->name('enviroments.index');
        Route::post('/store', [enviromentsController::class, 'store'])->name('enviroments.store');
        Route::patch('/{id}/update/', [enviromentsController::class, 'update'])->name('enviroments.update');
        Route::delete('/{id}', [enviromentsController::class, 'destroy'])->name('enviroments.destroy');
    });

    /* CRUD EQUIPAMENTOS */
    Route::prefix('equipments')->group(function () {
        Route::get('/', [equipmentsController::class, 'index'])->name('equipments.index');
        Route::post('/store', [equipmentsController::class, 'store'])->name('equipments.store');
        Route::patch('/{id}/update/', [equipmentsController::class, 'update'])->name('equipments.update');
        Route::delete('/{id}', [equipmentsController::class, 'destroy'])->name('equipments.destroy');
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

});
});
