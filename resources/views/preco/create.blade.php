@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Preco</h1>
        <form action="{{ route('preco.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
            </div>
            <div class="form-group">
                <label for="observacao">Observacao</label>
                <textarea name="observacao" id="observacao" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="preco">Preco</label>
                <input type="text" name="preco" id="preco" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
