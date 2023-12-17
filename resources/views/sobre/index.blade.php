@extends('layouts.app')

@section('content')
<h1>Sobre</h1>
@foreach ($sobres as $sobre)
<div>
    <h2>{{ $sobre->frase }}</h2>
    <p>{{ $sobre->descricao }}</p>
    <img src="{{ asset ('storage/' . $sobre->foto) }}" alt="Foto do serviço" style="width: 200px; height: 200px;">
    <a href="{{ route('sobre.edit', $sobre) }}">Edit</a>
    <a href="{{ route('sobre.show', $sobre) }}">View</a>
    <form action="{{ route('sobre.destroy', $sobre->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
@endforeach
<a href="{{ route('sobre.create') }}">Create</a>

</div>
@endsection