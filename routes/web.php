<?php

use App\Http\Controllers\controladorVista;
use App\Http\Controllers\controladorBD;
use Illuminate\Support\Facades\Route;



 Route::get('/',[controladorVista::class,'showPrincipal'])->name('principal');
 Route::get('registro',[controladorVista::class,'showRegistro'])->name('registro');
 Route::get('libro/cliente',[controladorVista::class,'showCliente'])->name('cliente');
 Route::post('guardarLibro',[controladorVista::class,'Procesarlibro'])->name('saveBook');

//Rutas
// show Registro 
Route::get('libro/create',[controladorBD::class,'create'])->name('libro.create');
//store
route::post('libro', [ControladorBD::class, 'store'])->name('libro.store');
//index
Route::get('libro/index',[controladorBD::class,'index'])->name('libro.index');