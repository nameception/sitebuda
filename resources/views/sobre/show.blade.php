@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $sobre->frase }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>Descrição:</strong> {{ $sobre->descricao }}</p>
                    <p><strong>Foto:</strong></p>
                    <img src="{{ asset ('storage/' . $sobre->foto) }}" alt="Foto do serviço" style="width: 200px; height: 200px;">
                </div>
                <form action="{{ route('sobre.destroy', $sobre->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection