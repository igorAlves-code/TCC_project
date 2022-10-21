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
        Route::get('/', function () {
            return view('admin/teachers');
        });
    });

    /* CRUD COORDENAÇÃO */
    Route::prefix('managements')->group(function () {
        Route::get('/', function () {
            return view('admin/managements');
        });
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
        Route::get('/', function () {
            return view('admin/equipments');
        });
    });
});

Route::resource('ocorrencia', ContactController::class);
