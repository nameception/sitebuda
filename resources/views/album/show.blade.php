@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $album->titulo }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>Descrição:</strong> {{ $album->descricao }}</p>
                    <p><strong>Data:</strong> {{ $album->data }}</p>
                    <p><strong>Projeto:</strong> {{ $album->projeto }}</p>
                    <p><strong>Fotos:</strong></p>
                    @foreach ($album->fotos as $foto)
                        <img src="{{ asset('storage/' . $foto) }}" alt="Foto" style="width: 200px; height: 200px;">
                    @endforeach
                    <p><strong>Foto Principal:</strong></p>
                    <img src="{{ asset('storage/' . $album->foto_principal) }}" alt="Foto Principal" style="width: 200px; height: 200px;">
                </div>
                <form action="{{ route('album.destroy', $album->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
