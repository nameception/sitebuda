<?php

namespace App\Http\Controllers;

use App\Models\TipoEvento;
use Illuminate\Http\Request;

class TipoEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos_eventos = TipoEvento::all();
        return view('tipo_evento.index', compact('tipos_eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipo_evento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TipoEvento::create($request->all());
        return redirect()->route('tipo_evento.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoEvento $tipo_evento)
    {
        return view('tipo_evento.show', compact('tipo_evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoEvento $tipo_evento)
    {
        return view('tipo_evento.edit', compact('tipo_evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoEvento $tipo_evento)
    {
        $tipo_evento->update($request->all());
        return redirect()->route('tipo_evento.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoEvento $tipo_evento)
    {
        $tipo_evento->delete();
        return redirect()->route('tipo_evento.index');
    }
}
