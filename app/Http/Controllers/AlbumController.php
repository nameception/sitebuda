<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();

        return view('album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('album.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $album = new Album($request->all());
        if ($request->hasFile('fotos')) {
            $imagePaths = [];
            foreach ($request->file('fotos') as $file) {
                $path = $file->store('album_fotos', 'public');
                $imagePaths[] = $path;
            }
            $album->fotos = json_encode($imagePaths);
        }
        if ($request->hasFile('foto_principal')) {
            $path = $request->file('foto_principal')->store('album_fotos', 'public');
            $album->foto_principal = $path;
        }
        $album->save();
        return redirect()->route('album.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('album.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        return view('album.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $album->fill($request->all());

        if ($request->hasFile('fotos')) {
            $imagePaths = [];
            foreach ($request->file('fotos') as $file) {
                $path = $file->store('album_fotos', 'public');
                $imagePaths[] = $path;
            }
            $album->foto = json_encode($imagePaths);
        }
        if ($request->hasFile('foto_principal')) {
            $path = $request->file('foto_principal')->store('album_fotos', 'public');
            $album->foto_principal = $path;
        }

        $album->save();
        return redirect()->route('album.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $imagePaths = json_decode($album->fotos);
        if ($imagePaths) {
            foreach ($imagePaths as $path) {
                Storage::delete('public/' . $path);
            }
        }
        Storage::delete('public/' . $album->foto_principal);

        $album->delete();
        return redirect()->route('album.index');
    }
}
