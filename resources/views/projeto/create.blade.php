@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Project</h1>
        <form action="{{ route('projeto.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <input type="text" name="tags" id="tags" class="form-control">
            </div>
            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" name="logo" id="logo" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
