@extends('layouts.app')

@section('content')
    <h1>Lista de Juegos</h1>
    <a href="{{ route('juegos.create') }}">Crear Juego</a>
    <ul>
        @foreach($juegos as $juego)
            <li>{{ $juego->nombre }} - <a href="{{ route('juegos.show', $juego->id) }}">Ver</a> | 
            <a href="{{ route('juegos.edit', $juego->id) }}">Editar</a></li>
        @endforeach
    </ul>
@endsection
