@extends('layouts.app')

@section('content')
    <h1>Edit Servico</h1>
    <form method="POST" action="{{ route('servico.update', $servico) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="titulo">Titulo</label>
        <input id="titulo" type="text" name="titulo" value="{{ $servico->titulo }}">
        <label for="descricao">Descricao</label>
        <input id="descricao" type="text" name="descricao" value="{{ $servico->descricao }}">
        <label for="foto">Foto</label>
        <input id="foto" type="file" name="foto">
        <button type="submit">Update</button>
    </form>
@endsection
