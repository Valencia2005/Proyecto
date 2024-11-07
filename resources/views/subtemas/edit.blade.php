<!-- resources/views/temas/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Tema</h1>
    <form action="{{ route('temas.update', $tema->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre del Tema:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $tema->nombre }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
    </form>
@endsection
