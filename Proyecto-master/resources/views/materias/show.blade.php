<!-- resources/views/materias/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Materia</title>
</head>
<body>
    <h1>Materia: {{ $materia->nombre }}</h1>

    <a href="{{ route('materias.index') }}">Volver al listado</a>
</body>
</html>
