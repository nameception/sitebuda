@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Texto</h1>
        <form action="{{ route('texto.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="texto">Texto</label>
                <textarea name="texto" id="texto" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
