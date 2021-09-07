<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Editar Filme | Adapti PS</title>
</head>
<body>
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
        <input type="text" name="release" placeholder="Lançamento" value="{{ $movie->release }}" required> 
        <input type="text" name="rating" placeholder="Nota" value="{{ $movie->rating }}" required> 
        <textarea name="synopsis" id="synopsis" cols="30" rows="10">{{ $movie->synopsis }}</textarea>
        <input value='storage/{{ $movie->image }}' type="file" name="image" accept='image/*'>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('movie.index') }}"><button>Voltar</button></a>
</body>
</html>