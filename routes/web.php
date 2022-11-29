<?php

use App\Http\Controllers\controladorVista;
use Illuminate\Support\Facades\Route;



Route::get('/',[controladorVista::class,'showPrincipal'])->name('principal');
Route::get('registro',[controladorVista::class,'showRegistro'])->name('registro');
Route::get('cliente',[controladorVista::class,'showCliente'])->name('cliente');


Route::post('guardarLibro',[controladorVista::class,'Procesarlibro'])->name('saveBook');
