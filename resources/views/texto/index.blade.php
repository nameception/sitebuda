@extends('layouts.app')

@section('content')
<h1>Textos</h1>
@foreach ($textos as $texto)
<div>
    <h2>{{ $texto->descricao }}</h2>
    <p>{{ $texto->texto }}</p>
    <a href="{{ route('texto.edit', $texto) }}">Edit</a>
    <a href="{{ route('texto.show', $texto) }}">View</a>
    <form action="{{ route('texto.destroy', $texto->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
@endforeach
<a href="{{ route('texto.create') }}">Create</a>

</div>
@endsection