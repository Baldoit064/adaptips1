@extends('template')

@section('assets')
<link rel="stylesheet" href="{{ asset('css/template.css') }}">
<link rel="stylesheet" href="{{ asset('css/partial.css') }}">
@endsection

@section('title', 'Editar Filme')

@section('content')
<div class="movie-create-container edit-container">
    <form class="movie-create-form" id="edit-movie" action="{{ route('movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Título do Filme</label>
            <input class="input-form" type="text" name="title" id="title" placeholder="Título" value="{{ $movie->title }}" required> 
        </div>
        <div>
            <label for="genre">Gênero</label>
            <input class="input-form" type="text" name="genre" id="genre" placeholder="Gênero" value="{{ $movie->genre }}" required> 
        </div>
        <div>
            <label for="release">Data de Lançamento</label>
            <input class="input-form" type="date" name="release" id="release" value="{{ $movie->release }}" required> 
        </div>
        <div>
            <label for="country_id">País</label>
            <select class="input-form" name="country_id" id="country_id" value="{{ $movie->country_id }}" required>
                <option value="" disabled selected>Escolha um País</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}" {{ $country->id==$movie->country_id ? 'selected':'' }}>{{ $country->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="rating">Nota</label>
            <input class="input-form" type="text" name="rating" id="rating" placeholder="Nota" value="{{ $movie->rating }}" required> 
        </div>
        <div class="movie-create-between">
            <div class="synopsis-div">
                <label for="synopsis">Sinopse do Filme</label>
                <textarea class="input-form synopsis-container" name="synopsis" id="synopsis" cols="30" rows="10" required>{{ $movie->synopsis }}</textarea>
            </div>
            <div class="image-card">
                <div class="movie-create-mobile">
                    <img class="image-preview" src="/storage/{{ $movie->image }}" alt="Imagem" width="100" height="100">
                </div>
                <div class="movie-create-mobile">
                    <label for="image" class="movie-create-image-button">SELECIONAR IMAGEM</label>
                    <input class="input-form movie-create-image" value='storage/{{ $movie->image }}' type="file" name="image" id="image" accept='image/*'>
                </div>
            </div>
        </div>
        <div class="button-bottom">
            <div class="movie-create-mobile">
                <button class="button-form" form="edit-movie" type="submit">EDITAR FILME</button>
            </div>
            <button type="submit" form="delete-movie" class="delete-button">APAGAR FILME</button>
        </div>
    </form>
    <div>
        <form class="delete-form" id="delete-movie" action="{{ route('movie.destroy', $movie->id) }}" method="POST">
            @csrf
            @method('DELETE')
        </form>
    </div>
</div>
@endsection