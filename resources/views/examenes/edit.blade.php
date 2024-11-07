@extends('layouts.app')

@section('content')
    <h1>Editar Examen</h1>

    <form action="{{ route('examenes.update', $examen->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="{{ $examen->titulo }}" required>
        
        <button type="submit">Actualizar</button>
    </form>
@endsection
