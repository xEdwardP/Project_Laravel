<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('clientes', ClienteController::class);
Route::resource('categorias', CategoriaController::class);
