<!-- resources/views/materias/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Materias</title>
</head>
<body>
    <h1>Materias</h1>
    
    <a href="{{ route('materias.create') }}">Crear nueva materia</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
                <tr>
                    <td>{{ $materia->nombre }}</td>
                    <td>
                        <a href="{{ route('materias.edit', $materia->id) }}">Editar</a>
                        <form action="{{ route('materias.destroy', $materia->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
