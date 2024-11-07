<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Muestra una lista de todas las materias.
     */
    public function index()
    {
        $materias = Materia::all();
        return view('materias.index', compact('materias'));
    }

    /**
     * Muestra el formulario para crear una nueva materia.
     */
    public function create()
    {
        return view('materias.create');
    }

    /**
     * Guarda una nueva materia en la base de datos.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        // Crear y guardar la nueva materia
        Materia::create($request->all());

        // Redireccionar a la lista de materias
        return redirect()->route('materias.index')
                         ->with('success', 'Materia creada exitosamente');
    }

    /**
     * Muestra los detalles de una materia específica.
     */
    public function show($id)
    {
        $materia = Materia::findOrFail($id);
        return view('materias.show', compact('materia'));
    }

    /**
     * Muestra el formulario para editar una materia existente.
     */
    public function edit($id)
    {
        $materia = Materia::findOrFail($id);
        return view('materias.edit', compact('materia'));
    }

    /**
     * Actualiza una materia en la base de datos.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        // Encontrar la materia y actualizar sus datos
        $materia = Materia::findOrFail($id);
        $materia->update($request->all());

        // Redireccionar a la lista de materias
        return redirect()->route('materias.index')
                         ->with('success', 'Materia actualizada exitosamente');
    }

    /**
     * Elimina una materia de la base de datos.
     */
    public function destroy($id)
    {
        $materia = Materia::findOrFail($id);
        $materia->delete();

        // Redireccionar a la lista de materias
        return redirect()->route('materias.index')
                         ->with('success', 'Materia eliminada exitosamente');
    }
}
