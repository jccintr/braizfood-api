<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\TaxaController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\AtendimentoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Cidades
Route::get('/cidades', [CidadeController::class, 'index']);
Route::post('/cidades', [CidadeController::class, 'store']);
Route::post('/cidades/{id}', [CidadeController::class, 'update']);
// Tipos
Route::get('/tipos', [TipoController::class, 'index']);
Route::post('/tipos', [TipoController::class, 'store']);
Route::post('/tipos/{id}', [TipoController::class, 'update']);
// Lojas
Route::get('/lojas', [LojaController::class, 'index']);
Route::post('/lojas', [LojaController::class, 'store']);
Route::post('/lojas/{id}', [LojaController::class, 'update']);
// Taxas 
Route::get('/taxas', [TaxaController::class, 'index']);
Route::post('/taxas', [TaxaController::class, 'store']);
Route::post('/taxas/{id}', [TaxaController::class, 'update']);
// Pagamentos
Route::get('/pagamentos', [PagamentoController::class, 'index']);
Route::post('/pagamentos', [PagamentoController::class, 'store']);
Route::post('/pagamentos/{id}', [PagamentoController::class, 'update']);
// Atendimentos
Route::get('/atendimentos', [AtendimentoController::class, 'index']);
Route::post('/atendimentos', [AtendimentoController::class, 'store']);
Route::post('/atendimentos/{id}', [AtendimentoController::class, 'update']);
// Categorias Controller

//Taxas Controller

//Pagamentos Controller

//Atendimento Controller