@extends('layouts.app')

@section('content')
    <h1>Edit Rede Social</h1>
    <form method="POST" action="{{ route('rede_social.update', $rede_social) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ $rede_social->name }}">
        <label for="url">URL</label>
        <input id="url" type="text" name="url" value="{{ $rede_social->url }}">
        <button type="submit">Update</button>
    </form>
@endsection
