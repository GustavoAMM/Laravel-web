<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorCliente;

use Illuminate\Support\Facades\DB;
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



    public function store(validadorCliente $request)

    {
        DB::table('tb_user')->insert([
            "Name" => $request->input('txtName'),
            "email" => $request->input('txtEmail'),
            "ine" => $request->input('txtIne'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        return redirect('user/create')->with('confirmacion', "xx");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(validadorCliente $request, $id)
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
