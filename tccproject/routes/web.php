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

Route::get('agendar', function () {
    return view('/user/agendar');
});

Route::get('agendamentos', function () {
    return view('/user/agendamentos');
});

/* GRUPO DE ROTAS COORDENAÇÃO */
Route::prefix('coordenacao')->group(function () {

    Route::get('/', function () {
        return view('admin/index');
    });

    Route::get('/agendar', function () {
        return view('admin/agendar');
    });

    Route::get('/agendamentos', function () {
        return view('admin/agendamentos');
    });

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

});

Route::resource('ocorrencia', ContactController::class);

Route::get('alterarSenha', function () {
    return view('alterarSenha');
});
