<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorFormulario;
use Illuminate\Http\Request;

class controladorVista extends Controller
{
    public function Procesarlibro(validadorFormulario $req){
        return redirect()->route('registro')->with('success','Información correcta');
    }

    public function showPrincipal(){
        return view('principal');
    }
    public function showRegistro(){
        return view('registro');
    }
}
