<?php

namespace App\Http\Controllers;

use App\Models\Subtema;
use Illuminate\Http\Request;

class SubtemaController extends Controller
{
    // Mostrar todos los subtemas
    public function index()
    {
        $subtemas = Subtema::all();
        return view('subtemas.index', compact('subtemas'));
    }

    // Mostrar el formulario para crear un nuevo subtema
    public function create()
    {
        return view('subtemas.create');
    }

    // Guardar un nuevo subtema
    public function store(Request $request)
    {
        Subtema::create($request->all());
        return redirect()->route('subtemas.index');
    }

    // Mostrar un subtema en detalle
    public function show(Subtema $subtema)
    {
        return view('subtemas.show', compact('subtema'));
    }

    // Mostrar el formulario para editar un subtema
    public function edit(Subtema $subtema)
    {
        return view('subtemas.edit', compact('subtema'));
    }

    // Actualizar un subtema
    public function update(Request $request, Subtema $subtema)
    {
        $subtema->update($request->all());
        return redirect()->route('subtemas.index');
    }

    // Eliminar un subtema
    public function destroy(Subtema $subtema)
    {
        $subtema->delete();
        return redirect()->route('subtemas.index');
    }
}
