@extends('layouts.app')

@section('content')
    <h1>Detalles del Juego</h1>

    <p>Nombre: {{ $juego->nombre }}</p>

    <a href="{{ route('juegos.index') }}">Volver a la lista de juegos</a>
@endsection
