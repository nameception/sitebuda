@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Album</h1>
        <form action="{{ route('album.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" name="data" id="data" class="form-control">
            </div>
            <div class="form-group">
                <label for="projeto">Projeto</label>
                <input type="text" name="projeto" id="projeto" class="form-control">
            </div>
            <div class="form-group">
                <label for="fotos">Fotos</label>
                <input type="file" name="fotos[]" id="fotos" class="form-control" multiple>
            </div>
            <div class="form-group">
                <label for="foto_principal">Foto Principal</label>
                <input type="file" name="foto_principal" id="foto_principal" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
