@extends('layouts.app')

@section('content')
    <h1>Edit Sobre</h1>
    <form method="POST" action="{{ route('sobre.update', $sobre) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="frase">Frase</label>
        <input id="frase" type="text" name="frase" value="{{ $sobre->frase }}">
        <label for="descricao">Descricao</label>
        <input id="descricao" type="text" name="descricao" value="{{ $sobre->descricao }}">
        <label for="foto">Foto</label>
        <input id="foto" type="file" name="foto">
        <button type="submit">Update</button>
    </form>
@endsection
