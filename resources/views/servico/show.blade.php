@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $servico->titulo }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
                    <p><strong>Foto:</strong></p>
                    <img src="{{ asset($servico->foto) }}" alt="Foto">
                </div>
                <form action="{{ route('servico.destroy', $servico->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection