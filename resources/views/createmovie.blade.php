@extends('template')

@section('title', 'Adicionar Filme')

@section('content')
<div class="create-container">
    <form class="form-create" id="form-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Título</label>
        <input class="input-form" type="text" name="title" id="title" placeholder="Título" required> 
        <label for="genre">Gênero</label>
        <input class="input-form" type="text" name="genre" id="genre" placeholder="Gênero" required> 
        <label for="country_id">País</label>
        <select class="input-form" name="country_id" id="country_id" required>
            <option value="" disabled selected>Escolha um País</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <label for="release">Lançamento</label>
        <input class="input-form" type="date" name="release" id="release" required> 
        <label for="rating">Nota</label>
        <input class="input-form" type="text" name="rating" id="rating" placeholder="Nota" required> 
        <label for="synopsis">Sinopse</label>
        <textarea class="input-form" name="synopsis" id="synopsis" cols="30" rows="10" required></textarea>
        <label for="image">Imagem</label>
        <input class="input-form" type="file" name="image" id="image" accept='image/*' required> 
        <button class="button-form" type="submit">Criar Filme</button>
        <a class="button-back" href="{{ route('movie.index') }}">Voltar</a>
    </form>
</div>
@endsection