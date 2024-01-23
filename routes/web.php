<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
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

// * Rutas de Controladores sin grupo
// Route::get('/', HomeController::class);
// Route::get('curso', [CursoController::class, 'index']);
// Route::get('curso/create', [CursoController::class, 'create']);
// Route::get('curso/{curso}', [CursoController::class, 'show']);


// * Rutas de Controladores en Grupo 
Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function () {
    Route::get('curso', 'index')->name('curso.index');
    Route::get('curso/create', 'create')->name('curso.create');
    Route::get('curso/{curso}', 'show')->name('curso.show');
});
