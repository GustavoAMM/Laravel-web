<?php

use App\Http\Controllers\controladorBD;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorUser;

//Rutas del libro Libro
Route::get('/',[controladorBD::class,'showPrincipal'])->name('principal');
// show Registro 
Route::get('libro/create',[controladorBD::class,'create'])->name('libro.create');
//store
route::post('libro', [ControladorBD::class, 'store'])->name('libro.store');
//index
Route::get('libro',[controladorBD::class,'index'])->name('libro.index');
//eliminar
Route::delete('libro/{id}', [ControladorBD::class,'destroy'])->name('libro.delete');
//put
Route::put('libro/{id}', [ControladorBD::class,'update'])->name('libro.update');

// Rutas de usuario
Route::get('user/create',[controladorUser::class,'create'])->name('user.create');
//index
Route::get('user',[controladorUser::class,'index'])->name('user.index');
//eliminar
Route::delete('user/{id}', [controladorUser::class,'destroy'])->name('user.delete');
//put
Route::put('user/{id}', [controladorUser::class,'update'])->name('user.update');