@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $preco->titulo }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>Observação:</strong> {{ $preco->observacao }}</p>
                    <p><strong>Preço:</strong> {{ $preco->preco }}</p>
                </div>
                <form action="{{ route('preco.destroy', $preco->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection