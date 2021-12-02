<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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


// Route::get('cursos',[CursoController::class, 'index'])->name('cursos.index');

// Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

// Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

// Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

// Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

// Route::put('cursos/{curso}',[CursoController::class, 'updated'])->name('cursos.updated');

// Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

Route::resource('cursos', CursoController::class);

Route::view('/', 'layouts.navbar')->name('home');

Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');

Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');