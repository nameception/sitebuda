<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicos = Servico::all();
        return view('servico.index', compact('servicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servico.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Servico::create($request->all());
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('servico_fotos', 'public');
            $servico = Servico::latest()->first();
            $servico->update([
                'foto' => $fotoPath,
            ]);
        }
        return redirect()->route('servico.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servico $servico)
    {
        return view('servico.show', compact('servico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servico $servico)
    {
        return view('servico.edit', compact('servico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servico $servico)
    {
        $servico->update($request->all());
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('servico_fotos', 'public');
            $servico->update([
                'foto' => $fotoPath,
            ]);
        }
        return redirect()->route('servico.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servico $servico)
    {
        $servico->delete();
        return redirect()->route('servico.index');
    }
}
