@extends('layouts.app')

@section('content')
    <h1>Edit Texto</h1>
    <form method="POST" action="{{ route('texto.update', $texto) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="descricao">Descrição</label>
        <textarea id="descricao" name="descricao">{{ $texto->descricao }}</textarea>
        <label for="texto">Texto</label>
        <textarea id="texto" name="texto">{{ $texto->texto }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
