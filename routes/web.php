<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProductoController;
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

// Route::get('/', function () {
//     return view('app');
// });

Route::get('/', [IndexController::class, 'index']);
Route::get('/pages', [IndexController::class, 'page']);
Route::get('/form2', [IndexController::class, 'form2']);

Route::resource('cliente', ClienteController::class);
Route::resource('venta', VentaController::class);
Route::resource('producto', ProductoController::class);
Route::resource('producto_category', CategoriaController::class);