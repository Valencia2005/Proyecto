@extends('layouts.app')

@section('content')
    <h1>Detalles del Usuario</h1>

    <p>Nombre: {{ $usuario->nombre }}</p>
    <p>Email: {{ $usuario->email }}</p>

    <a href="{{ route('usuarios.index') }}">Volver a la lista de usuarios</a>
@endsection
