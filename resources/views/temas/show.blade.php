@extends('layouts.app')

@section('content')
    <h1>{{ $tema->nombre }}</h1>
    <a href="{{ route('temas.index') }}">Volver</a>
@endsection
