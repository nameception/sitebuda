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
        $tipoEventos = TipoEvento::all();
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
    public function show(TipoEvento $tipoEvento)
    {
        return view('tipo_evento.show', compact('tipoEvento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoEvento $tipoEvento)
    {
        return view('tipo_evento.edit', compact('tipoEvento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoEvento $tipoEvento)
    {
        $tipoEvento->update($request->all());
        return redirect()->route('tipo_evento.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoEvento $tipoEvento)
    {
        $tipoEvento->delete();
        return redirect()->route('tipo_evento.index');
    }
}
