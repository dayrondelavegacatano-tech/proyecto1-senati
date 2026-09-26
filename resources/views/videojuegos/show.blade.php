<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Videojuego</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>Detalle del Videojuego</h1>
    <ul class="list-group">
        <li class="list-group-item"><b>ID:</b> {{ $videojuego->id }}</li>
        <li class="list-group-item"><b>Título:</b> {{ $videojuego->titulo }}</li>
        <li class="list-group-item"><b>Género:</b> {{ $videojuego->genero }}</li>
        <li class="list-group-item"><b>Precio:</b> {{ $videojuego->precio }}</li>
        <li class="list-group-item"><b>Lanzamiento:</b> {{ $videojuego->fecha_lanzamiento }}</li>
    </ul>
    <a href="{{ route('videojuegos.index') }}" class="btn btn-secondary mt-3">Volver</a>
</body>
</html>