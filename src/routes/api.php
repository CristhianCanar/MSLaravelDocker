<?php

use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\ProductoApiController;
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

// Obtener todos los productos
Route::get('productos', [ProductoApiController::class, 'index'])->middleware('auth:api');
// Obtener producto por id
Route::get('productos/{id}', [ProductoApiController::class, 'show']);
// Crear un nuevo producto
Route::post('productos', [ProductoApiController::class, 'store']);
// Actualizar un producto por id
Route::put('productos/{id}', [ProductoApiController::class, 'update']);
// Eliminar un producto por id
Route::delete('productos/{id}', [ProductoApiController::class, 'destroy']);

// Login
Route::post('login', [AuthApiController::class,'login']);

Route::get('login', function(){
    return response()->json('Debe iniciar sesión');
})->name('login');

Route::post('register', [AuthApiController::class,'register']);









