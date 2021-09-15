@extends('template')

@section('title', 'Editar Filme')

@section('content')
<div class="edit-container">
    <form id="form-create" action="{{ route('movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">Título</label>
        <input class="input-form" type="text" name="title" id="title" placeholder="Título" value="{{ $movie->title }}" required> 
        <label for="genre">Gênero</label>
        <input class="input-form" type="text" name="genre" id="genre" placeholder="Gênero" value="{{ $movie->genre }}" required> 
        <label for="country_id">País</label>
        <select class="input-form" name="country_id" id="country_id" value="{{ $movie->country_id }}" required>
            <option value="" disabled selected>Escolha um País</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}" {{ $country->id==$movie->country_id ? 'selected':'' }}>{{ $country->name }}</option>
            @endforeach
        </select>
        <label for="release">Lançamento</label>
        <input class="input-form" type="date" name="release" id="release" value="{{ $movie->release }}" required> 
        <label for="rating">Nota</label>
        <input class="input-form" type="text" name="rating" id="rating" placeholder="Nota" value="{{ $movie->rating }}" required> 
        <label for="synopsis">Sinopse</label>
        <textarea class="input-form" name="synopsis" id="synopsis" cols="30" rows="10" required>{{ $movie->synopsis }}</textarea>
        <label for="image">Imagem</label>
        <input class="input-form" value='storage/{{ $movie->image }}' type="file" name="image" id="image" accept='image/*'>
        <img src="/storage/{{ $movie->image }}" alt="Imagem" width="100" height="100">
        <button class="button-form" type="submit">Salvar</button>
        <a class="button-back" href="{{ route('movie.index') }}">Voltar</a>
    </form>
    <form action="{{ route('movie.destroy', $movie->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="movie-button">Deletar</button>
    </form>
</div>
@endsection