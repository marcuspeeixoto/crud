<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;


Route::get('/clientes',[ClienteController::class,'index'])->name('clientes.index');
Route::get('/clientes/create',[ClienteController::class,'create'])->name('clientes.create');

