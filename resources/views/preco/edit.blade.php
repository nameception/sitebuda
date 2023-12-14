@extends('layouts.app')

@section('content')
    <h1>Edit Preco</h1>
    <form method="POST" action="{{ route('preco.update', $preco) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="titulo">Titulo</label>
        <input id="titulo" type="text" name="titulo" value="{{ $preco->titulo }}">
        <label for="observacao">Observacao</label>
        <textarea id="observacao" name="observacao">{{ $preco->observacao }}</textarea>
        <label for="preco">Preco</label>
        <input id="preco" type="text" name="preco" value="{{ $preco->preco }}">
        <button type="submit">Update</button>
    </form>
@endsection
