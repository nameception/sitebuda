@extends('layouts.app')

@section('content')
<h1>Redes Sociais</h1>
@foreach ($redes_sociais as $rede_social)
<div>
    <h2>{{ $rede_social->name }}</h2>
    <p>{{ $rede_social->url }}</p>
    <a href="{{ route('rede_social.edit', $rede_social) }}">Edit</a>
    <a href="{{ route('rede_social.show', $rede_social) }}">View</a>
    <form action="{{ route('rede_social.destroy', $rede_social->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
@endforeach
<a href="{{ route('rede_social.create') }}">Create</a>

</div>
@endsection