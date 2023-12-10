<?php

namespace App\Http\Controllers;

use App\Models\RedeSocial;
use Illuminate\Http\Request;

class RedeSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $redes_sociais = RedeSocial::all();
        return view('rede_social.index', compact('redes_sociais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rede_social.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $redeSocial = RedeSocial::create($request->all());
        return redirect()->route('rede_social.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(RedeSocial $redeSocial)
    {
        return view('rede_social.show', compact('redeSocial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RedeSocial $redeSocial)
    {
        return view('rede_social.edit', compact('redeSocial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RedeSocial $redeSocial)
    {
        $redeSocial->update($request->all());
        return redirect()->route('rede_social.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RedeSocial $redeSocial)
    {
        $redeSocial->delete();
        return redirect()->route('rede_social.index');
    }
}
