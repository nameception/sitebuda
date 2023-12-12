@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $texto->nome }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>Descrição:</strong> {{ $texto->descricao }}</p>
                    <p><strong>Texto:</strong> {{ $texto->texto }}</p>
                </div>
                <form action="{{ route('texto.destroy', $texto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection