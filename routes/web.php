<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::resource('clientes', ClienteController::class);
    Route::resource('categorias', CategoriaController::class);
});
