@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $tipo_evento->nome }}</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Descrição:</strong> {{ $tipo_evento->descricao }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
