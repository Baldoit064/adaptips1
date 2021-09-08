<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Criar Filme | Adapti PS</title>
</head>
<body>
    <form id="form-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Título" required> 
        <input type="text" name="genre" placeholder="Gênero" required> 
        <select name="country_id" id="country_id">
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <input type="text" name="release" placeholder="Lançamento" required> 
        <input type="text" name="rating" placeholder="Nota" required> 
        <textarea name="synopsis" id="synopsis" cols="30" rows="10"></textarea>
        <input type="file" name="image" accept='image/*' required> 
        <button type="submit">Criar</button>
    </form>
    <a href="{{ route('movie.index') }}"><button>Voltar</button></a>
</body>
</html>