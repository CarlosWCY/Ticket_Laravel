<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\IndexController;
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
Route::get('/form2', [IndexController::class, 'form2']);

Route::resource('cliente', ClienteController::class)->only(['index','show', 'create','store']);