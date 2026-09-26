<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Videojuego</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>Editar Videojuego</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('videojuegos.update', $videojuego) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $videojuego->titulo) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Género</label>
            <input type="text" name="genero" class="form-control" value="{{ old('genero', $videojuego->genero) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" value="{{ old('precio', $videojuego->precio) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de lanzamiento</label>
            <input type="date" name="fecha_lanzamiento" class="form-control" value="{{ old('fecha_lanzamiento', $videojuego->fecha_lanzamiento) }}">
        </div>
        <button class="btn btn-success">Actualizar</button>
        <a href="{{ route('videojuegos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>