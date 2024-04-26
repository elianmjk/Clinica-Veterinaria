<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dueno;
use Illuminate\Support\Facades\DB;

class DuenoController extends Controller
{
    public function index()
    {
        $duenos = Dueno::all();
        return view('duenos.index', compact('duenos'));
       

    }

    public function create()
    {
        return view('duenos.create');
        
    }

    public function store(Request $request)
    {
        $dueno = new Dueno;
        $dueno->nombre = $request->nombre;
        $dueno->apellido = $request->apellido;
        $dueno->direccion = $request->direccion;
        $dueno->telefono = $request->telefono;
        $dueno->email = $request->email;
        $dueno->save();
        
        return redirect()->route("duenos.index");
        
    }

    public function edit($id)
    {
        
        $dueno = Dueno::find($id);
        return view('duenos.edit',['dueno'=> $dueno]);
    }

    public function update(Request $request, $id)
    {
       
        $duenos = Dueno::find($id);
        $duenos->nombre = $request->nombre;
        $duenos->apellido=$request->apellido;
        $duenos->direccion=$request->direccion;
        $duenos->telefono=$request->telefono;
        $duenos->email=$request->email;
        $duenos->save();

        return redirect()->route('duenos.index');
    }
    public function destroy(string $id)
    {
        $duenos = Dueno::find($id);
        $duenos->delete();

        $duenos = Dueno::all();
        return redirect()->route("duenos.index");
    }
}
