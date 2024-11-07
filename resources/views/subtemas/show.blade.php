<!-- resources/views/temas/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Detalle del Tema</h1>
    <p><strong>Nombre:</strong> {{ $tema->nombre }}</p>
    <a href="{{ route('temas.index') }}" class="btn btn-primary">Volver</a>
@endsection
