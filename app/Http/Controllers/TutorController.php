<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    // Mostrar lista de tutores
    public function index()
    {
        $tutores = Tutor::all();
        return view('tutores.index', compact('tutores'));
    }

    // Mostrar formulario para crear un nuevo tutor
    public function create()
    {
        return view('tutores.create');
    }

    // Guardar un nuevo tutor
    public function store(Request $request)
    {
        Tutor::create($request->all());
        return redirect()->route('tutores.index');
    }

    // Mostrar formulario para editar un tutor existente
    public function edit($id)
    {
        $tutor = Tutor::find($id);
        return view('tutores.edit', compact('tutor'));
    }

    // Actualizar un tutor
    public function update(Request $request, $id)
    {
        $tutor = Tutor::find($id);
        $tutor->update($request->all());
        return redirect()->route('tutores.index');
    }

    // Eliminar un tutor
    public function destroy($id)
    {
        Tutor::destroy($id);
        return redirect()->route('tutores.index');
    }
}
