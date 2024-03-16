<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('contenido/contenido');
});

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::post('/categorias/registrar', [CategoriaController::class, 'store']);
Route::put('/categorias/actualizar', [CategoriaController::class, 'update']);
Route::put('/categorias/desactivar', [CategoriaController::class, 'desactivar']);
Route::put('/categorias/activar', [CategoriaController::class, 'activar']);
