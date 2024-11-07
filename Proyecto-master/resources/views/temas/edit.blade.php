@extends('layouts.app')

@section('content')
    <h1>Editar Tema</h1>
    <form action="{{ route('temas.update', $tema->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $tema->nombre }}" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection
