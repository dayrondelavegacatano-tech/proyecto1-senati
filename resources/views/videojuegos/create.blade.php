<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Videojuego</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>Nuevo Videojuego</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('videojuegos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ old('titulo') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Género</label>
            <input type="text" name="genero" class="form-control" value="{{ old('genero') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" value="{{ old('precio') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de lanzamiento</label>
            <input type="date" name="fecha_lanzamiento" class="form-control" value="{{ old('fecha_lanzamiento') }}">
        </div>
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('videojuegos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>