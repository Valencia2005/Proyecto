<?php

namespace App\Http\Controllers;

use App\Models\Tema;  // Asegúrate de importar el modelo Tema
use Illuminate\Http\Request;

class TemaController extends Controller
{
    // Muestra una lista de los temas
    public function index()
    {
        $temas = Tema::all();  // Obtén todos los registros de la tabla 'temas'
        return view('temas.index', compact('temas'));  // Retorna la vista 'temas.index' con los temas
    }

    // Muestra el formulario para crear un nuevo tema
    public function create()
    {
        return view('temas.create');  // Retorna la vista para crear un tema
    }

    // Almacena un nuevo tema en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',  // Valida que el nombre sea obligatorio
        ]);

        Tema::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('temas.index');  // Redirige a la lista de temas
    }

    // Muestra los detalles de un tema específico
    public function show($id)
    {
        $tema = Tema::findOrFail($id);  // Encuentra el tema por ID o muestra error si no existe
        return view('temas.show', compact('tema'));  // Retorna la vista para mostrar el tema
    }

    // Muestra el formulario para editar un tema
    public function edit($id)
    {
        $tema = Tema::findOrFail($id);  // Encuentra el tema por ID o muestra error si no existe
        return view('temas.edit', compact('tema'));  // Retorna la vista de edición con los datos del tema
    }

    // Actualiza los datos de un tema en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $tema = Tema::findOrFail($id);  // Encuentra el tema por ID o muestra error si no existe
        $tema->update([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('temas.index');  // Redirige a la lista de temas
    }

    // Elimina un tema de la base de datos
    public function destroy($id)
    {
        $tema = Tema::findOrFail($id);  // Encuentra el tema por ID o muestra error si no existe
        $tema->delete();  // Elimina el tema

        return redirect()->route('temas.index');  // Redirige a la lista de temas
    }
}
