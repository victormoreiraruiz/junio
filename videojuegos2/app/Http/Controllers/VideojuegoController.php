<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Videojuego $videojuego)
    {
        return view('videojuegos.index', [
            'videojuego' => $videojuego,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videojuegos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $videojuego = new Videojuego();
        $videojuego->titulo = $request->input('titulo');
        $videojuego->anyo = $request->input('anyo');
        $videojuego->desarrolladora_id = $request->input('desarrolladora_id');
        $videojuego->save();
        session()->flash('success', 'videojuego creado correctamente.');
        return redirect()->route('videojuegos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Videojuego $videojuego)
    {
        return view('videojuegos.show', [
            'videojuego' => $videojuego,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videojuego $videojuego)
    {
        return view('videojuegos.edit', [
            'videojuego' => $videojuego,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videojuego $videojuego)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'anyo' => 'required|max:255',
        ]);
        $videojuego->titulo = $validated['titulo'];
        $videojuego->anyo = $validated['anyo'];
        $videojuego->save();
        session()->flash('success', 'videojuego cambiado correctamente.');
        return redirect()->route('videojuegos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videojuego $videojuego)
    {
        $videojuego->delete();
        session()->flash('success', 'videojuego eliminado correctamente.');
        return redirect()->route('videojuegos.index');
    }

}

