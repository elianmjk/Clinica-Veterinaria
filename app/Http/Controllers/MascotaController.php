<?php

namespace App\Http\Controllers;

use App\Models\Dueno;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MascotaController extends Controller
{
    
    public function index()
    {
        $mascotas=Mascota::all();
        return view('mascotas.index',compact('mascotas')); //el compact es para que pueda resibir esa variable en la vista
        
        $mascotas=DB::table('mascotas')
        ->join('duenos', 'mascotas.dueno_id', '=', 'duenos.id')
        ->select('mascotas.*', 'duenos.nombre AS nombre_dueno')
        ->get();      
 
    return view('mascotas.index', ['mascotas' => $mascotas]);
    
    }

    public function create()
    {
        return view('mascotas.create');

      $duenos = Dueno::all();
      return view('mascotas.create', [$duenos=>'duenos']);
      
    }

   
    public function store(Request $request)
    {
        
         $mascotas=new Mascota;
         $mascotas->nombre=$request->nombre;
         $mascotas->especie=$request->especie;
         $mascotas->raza=$request->raza;
         $mascotas->edad=$request->edad;
         $mascotas->dueno_id=$request->dueno_id;
         $mascotas->save();
         return redirect()->route("mascotas.index");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mascota = Mascota::find($id);
        return view('mascotas.edit',['mascota'=> $mascota]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mascotas = Mascota::find($id);

        $mascotas->nombre = $request->nombre;
        $mascotas->especie=$request->especie;
        $mascotas->raza=$request->raza;
        $mascotas->edad=$request->edad;
        $mascotas->dueno_id=$request->dueno_id;
        $mascotas->save();

        return redirect()->route("mascotas.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mascotas = Mascota::find($id);
        $mascotas->delete();

        $mascotas = Mascota::all();
        return redirect()->route("mascotas.index");
    }
}
