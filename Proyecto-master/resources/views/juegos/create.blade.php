@extends('layouts.app')

@section('content')
    <h1>Crear Juego</h1>

    <form action="{{ route('juegos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        
        <button type="submit">Guardar</button>
    </form>
@endsection
