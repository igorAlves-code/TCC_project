<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\agendamentosController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\enviromentsController;
use App\Http\Controllers\equipmentsController;
use App\Http\Controllers\managementsController;
use App\Http\Controllers\teachersController;
use App\Http\Controllers\userControl;
use App\Http\Controllers\siteController;

/* AUTENTICAÇÃO */
    Route::get('/', [userControl::class, 'login'])->name("login.page");
    Route::post('/', [userControl::class, 'auth'])->name("auth.user");
    Route::get('/logout', [userControl::class, 'logout'])->name("auth.log");


/* MIDDLEWARE DE AUTENTICAÇÃO */
    Route::middleware(['auth'])->group(function () {    

        Route::get('agendar', [siteController::class, 'agendar'])->name('Home');
        Route::post('agendar/enviar', [siteController::class, 'store']);

        // GRUPO DE ROTAS AGENDAMENTOS  
        Route::prefix('agendamentos')->group(function(){
            Route::get('/', [agendamentosController::class, 'view'])->name('agendamentos.view');
            Route::patch('/{id}/update', [agendamentosController::class, 'update'])->name('agendamentos.update');
            Route::delete('/{id}', [agendamentosController::class, 'destroy'])->name('agendamentos.destroy');
        });

        Route::resource('ocorrencia', ContactController::class);


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
    });
});
