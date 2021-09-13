@extends('template')

@section('title', 'Editar Filme')

@section('content')
<div class="edit-container">
    <form id="form-create" action="{{ route('movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" placeholder="Título" value="{{ $movie->title }}" required> 
        <input type="text" name="genre" placeholder="Gênero" value="{{ $movie->genre }}" required> 
        <select name="country_id" id="country_id" value="{{ $movie->country_id }}">
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <input type="text" name="release" placeholder="Data de Lançamento" value="{{ $movie->release }}" required> 
        <input type="text" name="rating" placeholder="Nota" value="{{ $movie->rating }}" required> 
        <textarea name="synopsis" id="synopsis" cols="30" rows="10">{{ $movie->synopsis }}</textarea>
        <input value='storage/{{ $movie->image }}' type="file" name="image" accept='image/*'>
        <button type="submit">Salvar</button>
    </form>
</div>
@endsection