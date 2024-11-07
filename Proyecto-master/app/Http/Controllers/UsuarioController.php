<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Esto asegura que el usuario esté autenticado
    }

    // Mostrar todos los usuarios
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    // Mostrar el formulario para crear un nuevo usuario
    public function create()
    {
        return view('usuarios.create');
    }

    // Almacenar un nuevo usuario
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
        ]);

        Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente');
    }

    // Mostrar un usuario específico
    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    // Mostrar el formulario de edición de un usuario
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    // Actualizar los datos de un usuario
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email,' . $usuario->id,
        ]);

        $usuario->update([
            'nombre' => $request->nombre,
            'email' => $request->email,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente');
    }

    // Eliminar un usuario
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente');
    }
}
