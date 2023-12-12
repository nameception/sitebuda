<?php

namespace App\Http\Controllers;

use App\Models\Texto;
use Illuminate\Http\Request;

class TextoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $textos = Texto::all();
        return view('texto.index', compact('textos'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('texto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Texto::create($request->all());
        return redirect()->route('texto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Texto $texto)
    {
        return view('texto.show', compact('texto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Texto $texto)
    {
        return view('texto.edit', compact('texto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Texto $texto)
    {
        $texto->update($request->all());
        return redirect()->route('texto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Texto $texto)
    {
        $texto->delete();
        return redirect()->route('texto.index');
    }
}
