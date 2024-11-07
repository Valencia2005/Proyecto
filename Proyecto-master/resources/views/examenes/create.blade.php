@extends('layouts.app')

@section('content')
    <h1>Crear Examen</h1>

    <form action="{{ route('examenes.store') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>
        
        <button type="submit">Guardar</button>
    </form>
@endsection
