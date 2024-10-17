<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    // Mostrar lista de estudiantes
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    // Mostrar formulario para crear un nuevo estudiante
    public function create()
    {
        return view('estudiantes.create');
    }

    // Guardar un nuevo estudiante
    public function store(Request $request)
    {
        Estudiante::create($request->all());
        return redirect()->route('estudiantes.index');
    }

    // Mostrar formulario para editar un estudiante existente
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiantes.edit', compact('estudiante'));
    }

    // Actualizar un estudiante
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->update($request->all());
        return redirect()->route('estudiantes.index');
    }

    // Eliminar un estudiante
    public function destroy($id)
    {
        Estudiante::destroy($id);
        return redirect()->route('estudiantes.index');
    }
}
