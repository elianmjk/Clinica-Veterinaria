<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    
    public function index()
    {
       $mascotas=Mascota::all();
       return view('mascotas.index',compact('mascotas')); //el compact es para que pueda resibir esa variable en la vista
    
    }

    public function create()
    {
        return view('mascotas.create');
      
    }

   
    public function store(Request $request)
    {
         $mascotas=new mascota;
         $mascotas->nombre=$request->nombre;
         $mascotas->especie=$request->especie;
         $mascotas->raza=$request->raza;
         $mascotas->edad=$request->edad;
         $mascotas->dueno_id=$request->dueno_id;
         $mascotas->save();

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
