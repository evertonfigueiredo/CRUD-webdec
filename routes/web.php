<?php

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

use App\Http\Controllers\PessoaController;

Route::get('/', [PessoaController::class, 'index']);

Route::get('/create', [PessoaController::class, 'create'])->middleware('auth');

Route::get('/edit', [PessoaController::class, 'list'])->middleware('auth');
Route::get('/edit/{id?}', [PessoaController::class, 'show'])->middleware('auth');
Route::put('/update/{id?}', [PessoaController::class, 'update'])->middleware('auth');

Route::get('/list/{id}', [PessoaController::class, 'destroy'])->middleware('auth')->name('list.destroy');

Route::get('/list', [PessoaController::class, 'list'])->middleware('auth');
Route::post('/list', [PessoaController::class, 'store'])->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/list', [PessoaController::class, 'list'])->name('list');
