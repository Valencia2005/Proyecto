<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    public function __construct()
    {
       
    }

    // Mostrar todos los juegos
    public function index()
    {
        $juegos = Juego::all();
        return view('juegos.index', compact('juegos'));
    }

    // Mostrar el formulario para crear un nuevo juego
    public function create()
    {
        return view('juegos.create');
    }

    // Almacenar un nuevo juego
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Juego::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('juegos.index')->with('success', 'Juego creado exitosamente');
    }

    // Mostrar un juego específico
    public function show(Juego $juego)
    {
        return view('juegos.show', compact('juego'));
    }

    // Mostrar el formulario de edición de un juego
    public function edit(Juego $juego)
    {
        return view('juegos.edit', compact('juego'));
    }

    // Actualizar los datos de un juego
    public function update(Request $request, Juego $juego)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $juego->update([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('juegos.index')->with('success', 'Juego actualizado exitosamente');
    }

    // Eliminar un juego
    public function destroy(Juego $juego)
    {
        $juego->delete();
        return redirect()->route('juegos.index')->with('success', 'Juego eliminado exitosamente');
    }
}
