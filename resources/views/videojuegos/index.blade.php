<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Videojuegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>Lista de Videojuegos</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('videojuegos.create') }}" class="btn btn-primary mb-3">Nuevo Videojuego</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th><th>Título</th><th>Género</th><th>Precio</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($videojuegos as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->titulo }}</td>
                    <td>{{ $v->genero }}</td>
                    <td>{{ $v->precio }}</td>
                    <td>
                        <a href="{{ route('videojuegos.show', $v) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('videojuegos.edit', $v) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('videojuegos.destroy', $v) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No hay videojuegos registrados.</td></tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-3">
        {{ $videojuegos->links() }}
    </div>
</body>
</html>