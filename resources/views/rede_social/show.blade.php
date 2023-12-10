@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $rede_social->name }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>URL:</strong> {{ $rede_social->url }}</p>
                    <p><strong>Logo:</strong></p>
                    <img src="{{ asset($rede_social->logo) }}" alt="Logo">
                </div>
                <form action="{{ route('rede_social.destroy', $rede_social->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection