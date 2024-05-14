<?php

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\api\ProjetoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('projetos', ProjetoController::class);

Route::group(['prefix' => 'projetos'],function(){
    Route::get('/', [ProjetoController::class, 'index']);
    Route::get('/{id}', [ProjetoController::class, 'show']);
	Route::post('/', [ProjetoController::class, 'store']);
    Route::put('/{id}', [ProjetoController::class, 'update']);
	Route::delete('/{id}', [ProjetoController::class, 'destroy']);
});


