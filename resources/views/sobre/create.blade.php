@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Sobre</h1>
        <form action="{{ route('sobre.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="frase">Frase</label>
                <input type="text" name="frase" id="frase" class="form-control">
            </div>
            <div class="form-group">
                <label for="descricao">Descricao</label>
                <textarea name="descricao" id="descricao" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
