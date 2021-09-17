@extends('template')

@section('assets')
<link rel="stylesheet" href="{{ asset('css/template.css') }}">
<link rel="stylesheet" href="{{ asset('css/partial.css') }}">
@endsection

@section('title', 'Adicionar Filme')

@section('content')
<link rel="stylesheet" href="{{ asset('css/partial.css') }}">
<div class="movie-create-container">
    <form class="form-create" id="form-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Título do Filme</label>
            <input class="input-form" type="text" name="title" id="title" placeholder="Título" required> 
        </div>
        <div>
            <label for="genre">Gênero</label>
            <input class="input-form" type="text" name="genre" id="genre" placeholder="Gênero" required> 
        </div>
        <div>
            <label for="release">Data de Lançamento</label>
            <input class="input-form" type="date" name="release" id="release" required> 
        </div>
        <div>
            <label for="country_id">País</label>
            <select class="input-form" name="country_id" id="country_id" required>
                <option value="" disabled selected>Escolha um País</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="rating">Nota</label>
            <input class="input-form" type="text" name="rating" id="rating" placeholder="Nota" required> 
        </div>
        <div class="movie-create-between">
            <div class="synopsis-div">
                <label for="synopsis">Sinopse do Filme</label>
                <textarea class="input-form synopsis-container" name="synopsis" id="synopsis" cols="30" rows="10" required></textarea>
            </div>
            <div class="image-card">
                <div class="movie-create-mobile">
                    <img class="image-preview" src="{{ asset('images/placeholder.png') }}" alt="Imagem" width="100" height="100">
                </div>
                <div class="movie-create-mobile">
                    <label for="image" class="movie-create-image-button">SELECIONAR IMAGEM</label>
                    <input class="input-form movie-create-image" type="file" name="image" id="image" accept='image/*' required> 
                </div>
            </div>
        </div>
        <div class="movie-create-mobile">
            <button class="button-form" type="submit">ADICIONAR FILME</button>
        </div>
    </form>
</div>
@endsection