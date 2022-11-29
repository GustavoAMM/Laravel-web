<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorFormulario;
use Illuminate\Http\Request;

class controladorVista extends Controller
{

    // public function Procesarlibro(validadorFormulario $req)
    // {
    //     $titulo = $req->input('txtTitulo');
    //     return redirect()->route('registro')->with('success',compact('titulo'));
    // }

    public function showPrincipal()
    {
        return view('principal');
    }
    // public function showRegistro()
    // {
    //     return view('registro');
    // }
    // public function showCliente(){
    //     return view('cliente');
    // }
}
