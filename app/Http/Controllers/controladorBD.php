<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultadoCon = DB::table('tb_libro')->get();
        return view('libros',compact('resultadoCon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorFormulario $request)
    {
        DB::table('tb_libro')->insert([
            "isbn"=>$request->input('txtIsbn'),
            "titulo"=>$request->input('txtTitulo'),
            "autor"=>$request->input('txtAutor'),
            "paginas"=>$request->input('txtPaginas'),
            "editorial"=>$request->input('txtEditorial'),
            "email"=>$request->input('txtEmail'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        $titulo = $request->input('txtTitulo');
        return redirect('libro/create')->with('confirmacion',compact('titulo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorFormulario $request, $id)
    {
        DB::table('tb_libro')->where('idLibro',$id)->update([
            "isbn"=>$request->input('txtIsbn'),
            "titulo"=>$request->input('txtTitulo'),
            "autor"=>$request->input('txtAutor'),
            "paginas"=>$request->input('txtPaginas'),
            "editorial"=>$request->input('txtEditorial'),
            "email"=>$request->input('txtEmail'),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('libro')->with('actualizado',"xx");
    }

    public function showPrincipal()
    {
        return view('principal');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_libro')->where('idLibro',$id)->delete();
       return redirect('libro')->with('Eliminacion',"abc");
    }
}
