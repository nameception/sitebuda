@extends('layouts.app')

@section('content')
    <h1>Edit Album</h1>
    <form method="POST" action="{{ route('album.update', $album) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="titulo">Título</label>
        <input type="text" id="titulo" name="titulo" value="{{ $album->titulo }}">
        <label for="descricao">Descrição</label>
        <textarea id="descricao" name="descricao">{{ $album->descricao }}</textarea>
        <label for="data">Data</label>
        <input type="date" id="data" name="data" value="{{ $album->data }}">
        <label for="projeto">Projeto</label>
        <input type="text" id="projeto" name="projeto" value="{{ $album->projeto }}">
        <label for="fotos">Fotos</label>
        <input type="file" id="fotos" name="fotos[]" multiple>
        <label for="foto_principal">Foto Principal</label>
        <input type="file" id="foto_principal" name="foto_principal">
        <button type="submit">Update</button>
    </form>
@endsection
