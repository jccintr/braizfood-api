<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;

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

/*
// Tenantcategoria Controller ====================================================
Route::get('/tenantcategoria/{id}', [TenantcategoriaController::class, 'getById']);
Route::get('/tenantcategorias', [TenantcategoriaController::class, 'list']);
Route::post('/tenantcategorias', [TenantcategoriaController::class, 'add']);
// Tenant Controller ====================================================
Route::get('/tenant/{id}', [TenantController::class, 'getById']);
Route::get('/tenants', [TenantController::class, 'list']);
Route::post('/tenants', [TenantController::class, 'add']);
// Ingrediente Controller ====================================================
Route::post('/ingredientes', [IngredienteController::class, 'add']);
Route::get('/ingredientes/tenant/{idTenant}', [IngredienteController::class, 'getByTenant']);
Route::post('/ingrediente/{id}', [IngredienteController::class, 'update']);

*/
// Cidades
Route::get('/cidades', [CidadeController::class, 'index']);
Route::post('/cidades', [CidadeController::class, 'store']);
Route::post('/cidades/{id}', [CidadeController::class, 'update']);
//Lojas Controller

// Categorias Controller

//Taxas Controller

//Pagamentos Controller

//Atendimento Controller