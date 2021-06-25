<?php


use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\AdicionarController;

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'index')->name('welcome');

Route::get('/catalogos', [CatalogosController::class, 'index'])->name('catalogos.index');
// Route::post('/catalogos', [CatalogosController::class, 'store'])->name('catalogos.store');
// Route::delete('/catalogo/{id}', [CatalogosController::class, 'destroy'])->name('catalogo.destroy');
// Route::get('/catalogo/editar/{id}', [CatalogosController::class, 'edit'])->name('catalogo.edit');
// Route::post('/catalogo/editar/', [CatalogosController::class, 'update'])->name('catalogo.update');

Route::get('/adicionar', [AdicionarController::class, 'index'])->name('adicionar.index')->middleware('auth');;
Route::post('/adicionar', [AdicionarController::class, 'store'])->name('adicionar.store')->middleware('auth');;
// Route::delete('/catalogo/{id}', [CatalogosController::class, 'destroy'])->name('catalogo.destroy');
// Route::get('/catalogo/editar/{id}', [CatalogosController::class, 'edit'])->name('catalogo.edit');
// Route::post('/catalogo/editar/', [CatalogosController::class, 'update'])->name('catalogo.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
