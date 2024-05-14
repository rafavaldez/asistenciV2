<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmisionController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\AsistenciaController;
use App\Models\Asistencia;
use App\Models\Estudiante;

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
    return view('Login/login');
});


Route::group(['prefix' => 'admin'], function()
{
    Route::get('/', [AdmisionController::class, 'index'])->name('inicio-admin');
      
});


Route::group(['prefix' => 'estudiante'], function()
{
    Route::get('/', [EstudianteController::class, 'index'])->name('inicio-admin');
    Route::get('showall', [EstudianteController::class, 'showall'])->name('showall-estudiante');
      
});

Route::group(['prefix' => 'asistencia'], function()
{
    Route::get('/', [AsistenciaController::class, 'index'])->name('inicio-asistencia');
    Route::get('showall', [AsistenciaController::class, 'showall'])->name('showall-asistencia'); 
});



