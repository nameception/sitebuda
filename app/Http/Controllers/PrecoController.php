<?php

namespace App\Http\Controllers;

use App\Models\Preco;
use Illuminate\Http\Request;

class PrecoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $precos = Preco::all();
        return view('precos.index', compact('precos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('precos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Preco::create($request->all());
        return redirect()->route('precos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Preco $preco)
    {
        return view('precos.show', compact('preco'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Preco $preco)
    {
        return view('precos.edit', compact('preco'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Preco $preco)
    {
        $preco->update($request->all());
        return redirect()->route('precos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Preco $preco)
    {
        $preco->delete();
        return redirect()->route('precos.index');
    }
}
