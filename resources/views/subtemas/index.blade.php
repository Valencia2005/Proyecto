<!-- resources/views/subtemas/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Lista de Subtemas</h1>
    <a href="{{ route('subtemas.create') }}" class="btn btn-primary">Crear Subtema</a>
    <ul>
        @foreach($subtemas as $subtema)
            <li>
                {{ $subtema->nombre }}
                <a href="{{ route('subtemas.show', $subtema->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('subtemas.edit', $subtema->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('subtemas.destroy', $subtema->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
