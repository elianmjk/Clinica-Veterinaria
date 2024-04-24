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
       $mascotas=DB::table('mascotas')
       ->join('duenos', 'mascotas.dueno_id', '=', 'duenos.id')
       ->select('mascotas.*', 'duenos.nombre AS nombre_dueno')
       ->get();
   
   return view('mascotas.index', ['mascotas' => $mascotas]);
       
    
    }

    public function create()
    {

    $duenos = Dueno::all();
    return view('mascotas.create', compact('duenos'));
      
    }

   
    public function store(Request $request)
    {
        
         $mascotas=new Mascota;
         $mascotas->nombre=$request->nombre;
         $mascotas->especie=$request->especie;
         $mascotas->raza=$request->raza;
         $mascotas->edad=$request->edad;
         $mascotas->dueno_id=$request->dueno;
         $mascotas->save();
         return redirect()->route("mascotas.index");

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
        $mascota = Mascota::find($id);
        return view('mascota.edit',['mascota'=> $mascota]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mascotas = Mascota::find($id);

        $mascotas->nombre = $request->nombre;
        $mascotas->apellido = $request->apellido;
        $mascotas->fecha_nacimiento = $request->fecha_nacimiento;
        $mascotas->genero = $request->genero;
        $mascotas->direccion = $request->direccion;
        $mascotas->telefono = $request->telefono;
        $mascotas->email = $request->email;
        // $paciente->id = $request->id;
        $mascotas->save();

     

        return redirect()->route("pacientes.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mascotas = Mascota::find($id);
        $mascotas->delete();

        $mascotas = Mascota::all();
        return redirect()->route("pacientes.index");
    }
}
