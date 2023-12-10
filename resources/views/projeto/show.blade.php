@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $projeto->nome }}</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Descrição:</strong> {{ $projeto->descricao }}</p>
                        <p><strong>Tags:</strong> {{ $projeto->tags }}</p>
                        <p><strong>Logo:</strong></p>
                        <img src="{{ asset($projeto->logo) }}" alt="Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
