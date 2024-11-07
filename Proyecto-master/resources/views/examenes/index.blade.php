@extends('layouts.app')

@section('content')
    <h1>Lista de Exámenes</h1>
    <a href="{{ route('examenes.create') }}">Crear Examen</a>
    <ul>
        @foreach($examenes as $examen)
            <li>{{ $examen->titulo }} - <a href="{{ route('examenes.show', $examen->id) }}">Ver</a> | 
            <a href="{{ route('examenes.edit', $examen->id) }}">Editar</a></li>
        @endforeach
    </ul>
@endsection
