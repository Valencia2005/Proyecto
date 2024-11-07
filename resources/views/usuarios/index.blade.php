@extends('layouts.app')

@section('content')
    <h1>Lista de Usuarios</h1>
    <a href="{{ route('usuarios.create') }}">Crear Usuario</a>
    <ul>
        @foreach($usuarios as $usuario)
            <li>{{ $usuario->nombre }} - <a href="{{ route('usuarios.show', $usuario->id) }}">Ver</a> | 
            <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a></li>
        @endforeach
    </ul>
@endsection
