<?php

use App\Http\Controllers\controladorVista;
use Illuminate\Support\Facades\Route;



Route::get('/',[controladorVista::class,'showPrincipal'])->name('principal');
Route::get('registro',[controladorVista::class,'showRegistro'])->name('registro');


Route::post('guardarLibro',[controladorVista::class,'Procesarlibro'])->name('saveLibro');