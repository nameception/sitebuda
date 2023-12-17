<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjetoController extends Controller
{
    public function index()
    {
        $projetos = Projeto::all();
        return view('projeto.index', compact('projetos'));
    }

    public function create()
    {
        return view('projeto.create');
    }

    public function store(Request $request)
    {
        $logoPath = null;
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'required',
            'tags' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('projeto_logos', 'public');
        }
        $projeto = Projeto::create([
            'nome' => $validatedData['nome'],
            'descricao' => $validatedData['descricao'],
            'tags' => $validatedData['tags'],
            'logo' => $logoPath,
        ]);

        return redirect()->route('projeto.index')->with('success', 'Projeto criado com sucesso!');
    }

    public function show(Projeto $projeto)
    {
        return view('projeto.show', compact('projeto'));
    }


    public function edit(Projeto $projeto)
    {
        return view('projeto.edit', compact('projeto'));
    }


    public function update(Request $request, Projeto $projeto)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'required',
            'tags' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $projeto->nome = $validatedData['nome'];
        $projeto->descricao = $validatedData['descricao'];
        $projeto->tags = $validatedData['tags'];
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('projeto_logos');
            $projeto->logo = $logoPath;
        }
        $projeto->save();
        return redirect()->route('projeto.index')->with('success', 'Projeto atualizado com sucesso!');
    }

    public function destroy(Projeto $projeto)
    {
        $projeto->delete();
        if ($projeto->logo) {
            Storage::delete($projeto->logo);
        }
        return redirect()->route('projeto.index')->with('success', 'Projeto deletado com sucesso!');
    }
}
