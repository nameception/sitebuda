<?php

namespace App\Http\Controllers;

use App\Models\Sobre;
use Illuminate\Http\Request;

class SobreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sobres = Sobre::all();
        return view('sobre.index', compact('sobres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sobre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sobre::create($request->all());
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('sobre_fotos', 'public');
            $sobre = Sobre::latest()->first();
            $sobre->update([
                'foto' => $fotoPath,
            ]);
        }
        return redirect()->route('sobre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sobre $sobre)
    {
        return view('sobre.show', compact('sobre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sobre $sobre)
    {
        return view('sobre.edit', compact('sobre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sobre $sobre)
    {
        $sobre->update($request->all());
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('sobre_fotos', 'public');
            $sobre->update([
                'foto' => $fotoPath,
            ]);
        }
        return redirect()->route('sobre.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sobre $sobre)
    {
        $sobre->delete();
        return redirect()->route('sobre.index');
    }
}
