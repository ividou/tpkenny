<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiClienteController;

Route::get('/clientes', [ApiClienteController::class, 'index']); // Obtener todos los clientes
Route::post('/clientes', [ApiClienteController::class, 'store']); // Crear un nuevo cliente
Route::get('/clientes/{id}', [ApiClienteController::class, 'show']); // Obtener un cliente por ID
Route::put('/clientes/{id}', [ApiClienteController::class, 'update']); // Actualizar un cliente por ID
Route::delete('/clientes/{id}', [ApiClienteController::class, 'destroy']); // Eliminar un cliente por ID
