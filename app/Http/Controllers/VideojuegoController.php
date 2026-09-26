<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    public function index()
    {
        $videojuegos = Videojuego::orderBy('id', 'desc')->paginate(10);
        return view('videojuegos.index', compact('videojuegos'));
    }

    public function create()
    {
        return view('videojuegos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo'            => 'required|string|max:255',
            'genero'            => 'required|string|max:100',
            'precio'            => 'required|numeric|min:0',
            'fecha_lanzamiento' => 'required|date',
        ]);

        Videojuego::create($request->all());

        return redirect()->route('videojuegos.index')
                         ->with('success', 'Videojuego creado correctamente.');
    }

    public function show(Videojuego $videojuego)
    {
        return view('videojuegos.show', compact('videojuego'));
    }

    public function edit(Videojuego $videojuego)
    {
        return view('videojuegos.edit', compact('videojuego'));
    }

    public function update(Request $request, Videojuego $videojuego)
    {
        $request->validate([
            'titulo'            => 'required|string|max:255',
            'genero'            => 'required|string|max:100',
            'precio'            => 'required|numeric|min:0',
            'fecha_lanzamiento' => 'required|date',
        ]);

        $videojuego->update($request->all());

        return redirect()->route('videojuegos.index')
                         ->with('success', 'Videojuego actualizado.');
    }

    public function destroy(Videojuego $videojuego)
    {
        $videojuego->delete();

        return redirect()->route('videojuegos.index')
                         ->with('success', 'Videojuego eliminado.');
    }
}