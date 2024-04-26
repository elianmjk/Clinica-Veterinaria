<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visita;
use App\Models\Mascota;

class VisitaController extends Controller
{
    public function index()
    {
       // Usando Eloquent ORM
    $visitas = Visita::all();
    
    // O usando el constructor de consultas de Laravel
    // $visitas = DB::table('visitas')
    //     ->join('mascotas', 'visitas.mascota_id', '=', 'mascotas.id')
    //     ->select('visitas.*', 'mascotas.nombre AS nombre_mascota')
    //     ->get();
    
    // Pasar las visitas a la vista
    return view('visitas.index', compact('visitas'));
    }

    public function create()
    {
        $mascotas = Mascota::all();
        return view('visitas.create', compact('mascotas'));
        
    }

    public function store(Request $request)
    {
        $visita = new Visita;
        
        // Asignar los valores recibidos del formulario a los atributos de la visita
        $visita->mascotas_id = $request->mascota_id;
        $visita->fecha_visita = $request->fecha_visita;
        $visita->motivo = $request->motivo;
        $visita->tratamiento = $request->tratamiento;
    
        // Guardar la visita en la base de datos
        $visita->save();
    
        // Redirigir al index de visitas
        return redirect()->route("visitas.index");
    }

    public function edit($id)
    {
        
        $visita = Visita::find($id);
        $mascotas = Mascota::all();
        return view('visitas.edit',['mascotas'=> $mascotas,'visita'=>$visita]);
        
    }

    public function update(Request $request, $id)
    {
         // Encontrar la visita por su ID
    $visita = Visita::findOrFail($id);

    // Actualizar los campos de la visita con los valores del formulario
    $visita->mascotas_id = $request->mascota_id;
    $visita->fecha_visita = $request->fecha_visita;
    $visita->motivo = $request->motivo;
    $visita->tratamiento = $request->tratamiento;

    // Guardar los cambios
    $visita->save();

    // Redirigir al index de visitas
    return redirect()->route("visitas.index");
    }

    public function destroy($id)
    {
      
        $visita = Visita::find($id);
        $visita->delete();

        $visita = Visita::all();
        return redirect()->route("visitas.index");
    }
}
