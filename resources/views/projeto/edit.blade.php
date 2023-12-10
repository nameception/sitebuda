@extends('layouts.app')

@section('content')
    <h1>Edit Projeto</h1>
    <form method="POST" action="{{ route('projeto.update', $projeto) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="nome">Nome</label>
        <input id="nome" type="text" name="nome" value="{{ $projeto->nome }}">
        <label for="descricao">Descrição</label>
        <textarea id="descricao" name="descricao">{{ $projeto->descricao }}</textarea>
        <label for="tags">Tags</label>
        <input id="tags" type="text" name="tags" value="{{ $projeto->tags }}">
        <label for="logo">Logo</label>
        <input id="logo" type="file" name="logo">
        <button type="submit">Update</button>
    </form>
@endsection
