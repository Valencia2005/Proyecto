@extends('layouts.app')

@section('content')
    <h1>Editar Usuario</h1>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $usuario->nombre }}" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $usuario->email }}" required>
        
        <button type="submit">Actualizar</button>
    </form>
@endsection
