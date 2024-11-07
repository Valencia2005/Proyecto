<!-- resources/views/materias/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Materia</title>
</head>
<body>
    <h1>Crear nueva materia</h1>

    <form action="{{ route('materias.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <button type="submit">Crear</button>
    </form>

    <a href="{{ route('materias.index') }}">Volver al listado</a>
</body>
</html>
