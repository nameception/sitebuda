@extends('layouts.app')

@section('content')
<h1>Preços</h1>
@foreach ($precos as $preco)
<div>
    <h2>{{ $preco->titulo }}</h2>
    <p>{{ $preco->observacao }}</p>
    <p>{{ $preco->preco }}</p>
    <a href="{{ route('preco.edit', $preco) }}">Edit</a>
    <a href="{{ route('preco.show', $preco) }}">View</a>
    <form action="{{ route('preco.destroy', $preco->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
@endforeach
<a href="{{ route('preco.create') }}">Create</a>

@endsection