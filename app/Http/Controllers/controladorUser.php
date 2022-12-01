<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class controladorUser extends Controller
{

    public function index()
    {
        $resultadoCon = DB::table('tb_user')->get();
        return view('showCliente', compact('resultadoCon'));
    }

    public function create()
    {
        return view('cliente');
    }


    public function store(Request $request)
    {
        DB::table('tb_user')->insert([
            "Name" => $request->input('txtNombre'),
            "email" => $request->input('txtEmail'),
            "ine" => $request->input('txtIne'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        $name = $request->input('txtTitulo');
        return redirect('user/create')->with('confirmacion', compact('name'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        DB::table('tb_user')->where('Id_user', $id)->update([
            "Name" => $request->input('txtName'),
            "email" => $request->input('txtEmail'),
            "ine" => $request->input('txtIne'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect('user')->with('actualizado', "xx");
    }


    public function destroy($id)
    {
        DB::table('tb_user')->where('Id_user', $id)->delete();
        return redirect('user')->with('Eliminacion', "abc");
    }
}
