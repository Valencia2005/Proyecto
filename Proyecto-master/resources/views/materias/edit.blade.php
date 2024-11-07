<!-- resources/views/materias/edit.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Materia</title>
</head>
<body>
    <h1>Editar Materia</h1>

    <form action="{{ route('materias.update', $materia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $materia->nombre }}" required>
        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('materias.index') }}">Volver al listado</a>
</body>
</html>
