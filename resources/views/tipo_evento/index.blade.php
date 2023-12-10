@extends('layouts.app')

@section('content')
<h1>Projetos</h1>
@foreach ($projetos as $projeto)
<div>
    <h2>{{ $projeto->nome }}</h2>
    <p>{{ $projeto->description }}</p>
    <p>{{ $projeto->tags }}</p>
    <p>{{ $projeto->logo }}</p>
    <a href="{{ route('projeto.edit', $projeto) }}">Edit</a>
    <a href="{{ route('projeto.show', $projeto) }}">View</a>
</div>
@endforeach
<a href="{{ route('projeto.create') }}">Create</a>

</div>
@endsection