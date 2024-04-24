<?php

namespace App\Http\Controllers;

use App\Models\Dueno;
use Illuminate\Http\Request;

class DuenoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $duenos=Dueno::all();
        return view('dueno.index',compact('duenos'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dueno.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $duenos=new Dueno;
      $duenos->nombre=$request->nombre;
      $duenos->dueno_id=$request->dueno_id;
      $duenos->apellido=$request->apellido;
      $duenos->direccion=$request->direccion;
      $duenos->telefono=$request->telefono;
      $duenos->email=$request->email;
      $duenos->save();
      $duenos=Dueno::all(); //ESTE METODO DEVUELVE LA COLECCION DUENOS 
     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $duenos= Dueno::find($id);
        return view('dueno.edit',['duenos'=> $duenos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $duenos = Dueno::find($id);

        $duenos->nombre = $request->nombre;
        $duenos->apellido = $request->apellido;
        $duenos->especialidad = $request->especialidad;
        $duenos->horarios = $request->horarios;
        $duenos->telefono = $request->telefono;
        $duenos->email = $request->email;
        $duenos->save();

        return redirect()->route("dueno.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $duenos = Dueno::find($id);
        $duenos->delete();

        return redirect()->route("dueno.index");
    }
}
