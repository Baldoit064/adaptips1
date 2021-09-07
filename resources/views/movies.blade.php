<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Adapti</title>
</head>
<body>
    <a href="{{ route('movie.create') }}"><button>Criar</button></a>
    @foreach ($movies as $movie)
        <h4>{{ $movie->title }} from {{ $movie->country->name }}</h4>
        <img src="storage/{{ $movie->image }}" alt="Imagem" width="80" height="100">
        <a href="{{ route('movie.edit', $movie->id) }}">Editar</a>
    @endforeach
</body>
</html>