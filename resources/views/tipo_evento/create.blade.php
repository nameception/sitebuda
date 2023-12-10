@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Tipo Evento</h1>
        <form action="{{ route('tipo_evento.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
