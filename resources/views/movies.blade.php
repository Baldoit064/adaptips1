@extends('template')

@section('title', 'Filmes')

@section('content')
@foreach ($movies as $movie)
    <div class="movie-container">
        <h2>{{ $movie->title }}</h2>
        <p>from {{ $movie->country->name }}</p>
        <p>Gênero: {{ $movie->genre }}</p>
        <p>Lançamento: {{ $movie->release }}</p>
        <p>Nota: {{ $movie->rating }}/10</p>
        <img src="storage/{{ $movie->image }}" alt="Imagem" width="100" height="100">
        <p><a href="{{ route('movie.edit', $movie->id) }}"><button class="movie-button">Editar</button></a></p>
        <form action="{{ route('movie.destroy', $movie->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="movie-button">Deletar</button>
        </form>
    </div>
@endforeach
@if(count($movies) == 0 && $search)
    <h3>Nenhum filme foi encontrado</h3>
@elseif(count($movies) == 0)
    <h3>Você ainda não adicionou nenhum filme</h3>
@endif
@endsection