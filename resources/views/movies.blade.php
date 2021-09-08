<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Adapti</title>
</head>
<body>
    <a href="{{ route('movie.index') }}"><button>Home</button></a>
    <form action="{{ route('movie.index') }}" method="GET">
        <input type="text" id="search" name="search" placeholder="Pesquisar Filmes">
        <button>Pesquisar</button>
    </form>
    <a href="{{ route('movie.create') }}"><button>Criar</button></a>
    @foreach ($movies as $movie)
        <form action="{{ route('movie.destroy', $movie->id) }}" method="POST">
            <h3>{{ $movie->title }}</h3>
            <h5> from {{ $movie->country->name }}</h5>
            <h4>Gênero: {{ $movie->genre }}</h4>
            <h4>Lançamento: {{ $movie->release }}</h4>
            <img src="storage/{{ $movie->image }}" alt="Imagem" width="80" height="100">
            <a href="{{ route('movie.edit', $movie->id) }}"><button>Editar</button></a>
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    @endforeach
    @if(count($movies) == 0 && $search)
        <h4>Nenhum filme foi encontrado</h4>
    @elseif(count($movies) == 0)
        <h4>Você ainda não adicionou nenhum filme</h4>
    @endif
</body>
</html>