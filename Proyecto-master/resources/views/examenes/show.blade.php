@extends('layouts.app')

@section('content')
    <h1>Detalles del Examen</h1>

    <p>Título: {{ $examen->titulo }}</p>

    <a href="{{ route('examenes.index') }}">Volver a la lista de exámenes</a>
@endsection
