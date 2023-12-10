@extends('layouts.app')

@section('content')
<h1>Tipos de Evento</h1>
@foreach ($tipos_eventos as $tipo_evento)
<div>
    <h2>{{ $tipo_evento->descricao }}</h2>
    <a href="{{ route('tipo_evento.edit', $tipo_evento) }}">Edit</a>
    <a href="{{ route('tipo_evento.show', $tipo_evento) }}">View</a>
    <form action="{{ route('tipo_evento.destroy', $tipo_evento->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
@endforeach
<a href="{{ route('tipo_evento.create') }}">Create</a>

</div>
@endsection