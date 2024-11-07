<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    public function index()
    {
        $examenes = Examen::all(); // Obtén todos los exámenes
        return view('examenes.index', compact('examenes'));
    }

    public function create()
    {
        return view('examenes.create'); // Muestra el formulario para crear un examen
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            // Validaciones adicionales
        ]);

        Examen::create($request->all());

        return redirect()->route('examenes.index')->with('success', 'Examen creado correctamente.');
    }

    public function show(Examen $examen)
    {
        return view('examenes.show', compact('examen'));
    }

    public function edit(Examen $examen)
    {
        return view('examenes.edit', compact('examen'));
    }

    public function update(Request $request, Examen $examen)
    {
        $request->validate([
            'nombre' => 'required',
            // Validaciones adicionales
        ]);

        $examen->update($request->all());

        return redirect()->route('examenes.index')->with('success', 'Examen actualizado correctamente.');
    }

    public function destroy(Examen $examen)
    {
        $examen->delete();
        return redirect()->route('examenes.index')->with('success', 'Examen eliminado correctamente.');
    }
}
