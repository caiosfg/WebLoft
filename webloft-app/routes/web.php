<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImovelController;
use App\Http\Controllers\ContatosController;

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

Route::get('/', [ImovelController::class, 'index']); 
Route::get('/imoveis/cadastrar', [ImovelController::class, 'cadastrar']); 
Route::get('/imoveis/{id}', [ImovelController::class, 'show']); 
Route::post('/imoveis', [ImovelController::class, 'salvar']); 

Route::get('/contatos', [ContatosController::class, 'faleConosco']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
