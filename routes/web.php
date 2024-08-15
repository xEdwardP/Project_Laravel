<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::resource('categorias', CategoriaController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('empleados', EmpleadoController::class);
});
