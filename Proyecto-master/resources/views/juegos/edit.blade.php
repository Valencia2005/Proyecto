@extends('layouts.app')

@section('content')
    <h1>Editar Juego</h1>

    <form action="{{ route('juegos.update', $juego->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $juego->nombre }}" required>
        
        <button type="submit">Actualizar</button>
    </form>
@endsection
