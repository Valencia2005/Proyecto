@extends('layouts.app')

@section('content')
    <h1>Temas</h1>
    <a href="{{ route('temas.create') }}">Crear Nuevo Tema</a>
    
    <ul>
        @foreach($temas as $tema)
            <li>
                {{ $tema->nombre }} 
                <a href="{{ route('temas.show', $tema->id) }}">Ver</a> | 
                <a href="{{ route('temas.edit', $tema->id) }}">Editar</a> | 
                <form action="{{ route('temas.destroy', $tema->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
