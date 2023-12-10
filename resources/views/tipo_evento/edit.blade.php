@extends('layouts.app')

@section('content')
    <h1>Edit Tipo Evento</h1>
    <form method="POST" action="{{ route('tipo_evento.update', $tipo_evento) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="descricao">Descrição</label>
        <textarea id="descricao" name="descricao">{{ $tipo_evento->descricao }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
