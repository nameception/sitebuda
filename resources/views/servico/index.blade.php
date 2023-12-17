@extends('layouts.app')

@section('content')
<h1>Serviços</h1>
@foreach ($servicos as $servico)
<div>
    <h2>{{ $servico->titulo }}</h2>
    <p>{{ $servico->descricao }}</p>
    <img src="{{ asset ('storage/' . $servico->foto) }}" alt="Foto do serviço" style="width: 200px; height: 200px;">
    <a href="{{ route('servico.edit', $servico) }}">Edit</a>
    <a href="{{ route('servico.show', $servico) }}">View</a>
    <form action="{{ route('servico.destroy', $servico->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
@endforeach
<a href="{{ route('servico.create') }}">Create</a>

</div>
@endsection