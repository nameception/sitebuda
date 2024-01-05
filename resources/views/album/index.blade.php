@extends('layouts.app')

@section('content')
<h1>Albums</h1>
@foreach ($albums as $album)
<div>
    <h2>{{ $album->titulo }}</h2>
    <p>{{ $album->descricao }}</p>
    <p>{{ $album->data }}</p>
    <p>{{ $album->projeto }}</p>
    <p>{{ $album->fotos }}</p>
    <img src="{{ asset('storage/' . $album->foto_principal) }}" alt="Main Photo" style="width: 200px; height: 200px;">
    <a href="{{ route('album.edit', $album) }}">Edit</a>
    <a href="{{ route('album.show', $album) }}">View</a>
    <form action="{{ route('album.destroy', $album->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
@endforeach
<a href="{{ route('album.create') }}">Create</a>

</div>
@endsection
