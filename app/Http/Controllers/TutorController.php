<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{

    public function index()
    {
        $tutores = Tutor::all();
        return view('tutores.index', compact('tutores'));
    }


    public function create()
    {
        return view('tutores.create');
    }

    public function store(Request $request)
    {
        Tutor::create($request->all());
        return redirect()->route('tutores.index');
    }


    public function edit($id)
    {
        $tutor = Tutor::find($id);
        return view('tutores.edit', compact('tutor'));
    }

    public function update(Request $request, $id)
    {
        $tutor = Tutor::find($id);
        $tutor->update($request->all());
        return redirect()->route('tutores.index');
    }

    public function destroy($id)
    {
        Tutor::destroy($id);
        return redirect()->route('tutores.index');
    }
}
