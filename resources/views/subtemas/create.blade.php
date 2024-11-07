<!-- resources/views/temas/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Crear Tema</h1>
    <form action="{{ route('temas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del Tema:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection
